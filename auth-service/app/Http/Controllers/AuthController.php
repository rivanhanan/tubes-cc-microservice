<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    private function getJsonPayload(Request $request): array
    {
        $raw = $request->getContent();

        if (!$raw) {
            return [];
        }

        $raw = ltrim($raw, "\xEF\xBB\xBF \t\r\n"); // strip UTF-8 BOM + leading whitespace

        $json = json_decode($raw, true);

        return is_array($json) ? $json : [];
    }

    public function register(Request $request)
    {
        $payload = $this->getJsonPayload($request);

        $validated = validator($payload, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ])->validate();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Register berhasil',
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function login(Request $request)
    {
        $payload = $this->getJsonPayload($request);

        validator($payload, [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        $user = User::where('email', $payload['email'])->first();

        if (!$user || !Hash::check($payload['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email atau password salah']
            ]);
        }

        $token = $user
            ->createToken('auth_token')
            ->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'user' => $user
        ]);
    }

    public function me(Request $request)
    {
        return response()->json(
            $request->user()
        );
    }

    public function logout(Request $request)
    {
        $request
            ->user()
            ->currentAccessToken()
            ->delete();

        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    }
}
