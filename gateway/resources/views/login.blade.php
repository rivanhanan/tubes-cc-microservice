<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Restaurant System</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 flex items-center justify-center">

<div class="w-full max-w-lg">

    <div class="bg-slate-800/90 backdrop-blur-xl rounded-3xl shadow-2xl border border-slate-700 p-10 hover:shadow-cyan-500/20 transition duration-300">

        <div class="text-center">

            <div class="text-7xl mb-4">
                🍽️
            </div>

            <h1 class="text-4xl font-bold text-white">
                Restaurant System
            </h1>

            <p class="text-slate-300 mt-2 text-lg font-medium">
    Selamat Datang 
</p>

<p class="text-slate-400 text-sm mt-2">
    Masuk untuk mengelola kategori, menu, dan resep restoran.
</p>

        </div>

        <div class="mt-8 space-y-5">

            <input
    id="email"
    type="email"
    placeholder="📧 Email"
    class="w-full p-4 rounded-xl bg-slate-700 border border-slate-600 text-white outline-none transition duration-300 focus:ring-2 focus:ring-cyan-500 focus:border-cyan-400">

            <div class="relative">

                <input
    id="password"
    type="password"
    placeholder="🔒 Password"
    class="w-full p-4 rounded-xl bg-slate-700 border border-slate-600 text-white outline-none transition duration-300 focus:ring-2 focus:ring-cyan-500 focus:border-cyan-400">

            </div>

            <button
                onclick="login()"
                class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 transition duration-300 p-4 rounded-xl font-bold text-white shadow-lg hover:scale-105">

                Login

            </button>

        </div>

        <div class="text-center mt-8">

    <span class="text-slate-400">
        Belum punya akun?
    </span>

    <a href="/register-page"
       class="text-cyan-400 hover:text-cyan-300 font-semibold">

        Register

    </a>

</div>


    </div>

</div>

<script>

async function login(){

    let response = await fetch('/login',{

        method:'POST',

        headers:{
            'Content-Type':'application/json'
        },

        body:JSON.stringify({

            email:document.getElementById('email').value,

            password:document.getElementById('password').value

        })

    });

    let data = await response.json();

    if(data.token){

        localStorage.setItem('token',data.token);

        localStorage.setItem('user_name',data.user.name);

        localStorage.setItem('role',data.user.role);

        if(data.user.role=='admin'){

            window.location='/dashboard';

        }else{

            window.location='/dashboard-user';

        }

    }else{

        alert(data.message);

    }

}

</script>

</body>

</html>