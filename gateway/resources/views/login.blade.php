<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 flex items-center justify-center h-screen">

<div class="bg-slate-800 p-8 rounded-xl shadow-lg w-96">

    <h1 class="text-3xl text-white font-bold text-center mb-6">
        Login
    </h1>

    <form id="loginForm">

        <input
            type="email"
            name="email"
            placeholder="Email"
            class="w-full p-3 mb-4 rounded bg-slate-700 text-white"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            class="w-full p-3 mb-4 rounded bg-slate-700 text-white"
            required
        >

        <button
            type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white p-3 rounded"
        >
            Login
        </button>

    </form>

    <p id="message" class="text-center mt-4"></p>

    <div class="text-center mt-4">
        <a href="/register-page" class="text-blue-400">
            Register
        </a>
    </div>

</div>

<script>

document.getElementById('loginForm').addEventListener('submit', async function(e){

    e.preventDefault();

    const email =
        document.querySelector('input[name="email"]').value;

    const password =
        document.querySelector('input[name="password"]').value;

    const response = await fetch('/login', {

        method: 'POST',

        headers: {
            'Content-Type': 'application/json'
        },

        body: JSON.stringify({
            email,
            password
        })

    });

    const data = await response.json();

    if(data.token){

        localStorage.setItem('token', data.token);
        localStorage.setItem('user_name', data.user.name);
        localStorage.setItem('role', data.user.role);

        document.getElementById('message').innerHTML =
            '<span class="text-green-400">Login Success</span>';

        setTimeout(() => {

            if(data.user.role === 'admin'){

            window.location.href = '/dashboard';

        }else{

        window.location.href = '/dashboard-user';

        }

        }, 1000);

    }else{

        document.getElementById('message').innerHTML =
            '<span class="text-red-400">Login Failed</span>';

        console.log(data);

    }

});

</script>

</body>
</html>