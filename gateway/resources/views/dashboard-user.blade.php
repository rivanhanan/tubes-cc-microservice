<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-white">

<script>

const token = localStorage.getItem('token');

if(!token){
    window.location.href = '/login-page';
}

const role = localStorage.getItem('role');

if(role === 'admin'){
    window.location.href = '/dashboard';
}

</script>

<nav class="bg-slate-900 border-b border-slate-800">

    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-bold text-cyan-400">
            👤 User Dashboard
        </h1>

        <div class="flex items-center gap-3">

            <span id="userName"
                  class="text-cyan-400 font-semibold">
                Loading...
            </span>

            <span class="bg-blue-600 px-3 py-1 rounded-full text-xs font-bold">
                USER
            </span>

            <button
                onclick="logout()"
                class="bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700">
                Logout
            </button>

        </div>

    </div>

</nav>

<div class="container mx-auto px-6 py-12">

    <h2 class="text-5xl font-bold mb-4">
        Welcome User
    </h2>

    <p class="text-slate-400 mb-10">
        Restaurant Catalog & Recipe System
    </p>

    <div class="grid md:grid-cols-3 gap-6">

        <a href="/categories-page"
           class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-cyan-500 transition">

            <div class="text-5xl mb-4">
                📂
            </div>

            <h3 class="text-xl font-bold text-cyan-400">
                Categories
            </h3>

            <p class="mt-3 text-slate-400">
                View all restaurant categories.
            </p>

        </a>

        <a href="/menus-page"
           class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-green-500 transition">

            <div class="text-5xl mb-4">
                🍽️
            </div>

            <h3 class="text-xl font-bold text-green-400">
                Menus
            </h3>

            <p class="mt-3 text-slate-400">
                Browse all available menu items.
            </p>

        </a>

        <a href="/recipes-page"
           class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-purple-500 transition">

            <div class="text-5xl mb-4">
                👨‍🍳
            </div>

            <h3 class="text-xl font-bold text-purple-400">
                Recipes
            </h3>

            <p class="mt-3 text-slate-400">
                View recipe information and ingredients.
            </p>

        </a>

    </div>

</div>

<footer class="mt-20 py-8 border-t border-slate-800 text-center text-slate-500">

    Cloud Computing - Microservices Project<br>
    Telkom University 2026

</footer>

<script>

window.onload = function(){

    const userName = localStorage.getItem('user_name');

    if(userName){
        document.getElementById('userName').innerText =
            '👤 ' + userName;
    }

}

function logout(){

    localStorage.removeItem('token');
    localStorage.removeItem('user_name');
    localStorage.removeItem('role');

    window.location.href = '/login-page';
}

</script>

</body>
</html>