<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 flex items-center justify-center h-screen">

<div class="bg-slate-800 p-8 rounded-xl shadow-lg w-96">

    <h1 class="text-3xl text-white font-bold text-center mb-6">
        Register
    </h1>

    <form id="registerForm">

        <input
            type="text"
            name="name"
            placeholder="Name"
            class="w-full p-3 mb-4 rounded bg-slate-700 text-white"
            required
        >

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
            class="w-full bg-green-600 hover:bg-green-700 text-white p-3 rounded"
        >
            Register
        </button>

    </form>

    <p id="message" class="text-center mt-4"></p>

    <div class="text-center mt-4">
        <a href="/login-page" class="text-blue-400">
            Login
        </a>
    </div>

</div>

<script>

document.getElementById('registerForm').addEventListener('submit', async function(e){

    e.preventDefault();

    const name =
        document.querySelector('input[name="name"]').value;

    const email =
        document.querySelector('input[name="email"]').value;

    const password =
        document.querySelector('input[name="password"]').value;

    const response = await fetch('/register', {

        method: 'POST',

        headers: {
            'Content-Type': 'application/json'
        },

        body: JSON.stringify({
            name,
            email,
            password
        })

    });

    const data = await response.json();

    if(data.user || data.message){

        document.getElementById('message').innerHTML =
            '<span class="text-green-400">Register Success</span>';

        setTimeout(() => {

            window.location.href = '/login-page';

        }, 1500);

    }else{

        document.getElementById('message').innerHTML =
            '<span class="text-red-400">Register Failed</span>';

        console.log(data);

    }

});

</script>

</body>
</html>