<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


<script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-slate-950 text-white">

<script>

const token = localStorage.getItem('token');

if(!token){

    window.location.href='/login-page';

}

</script>

<!-- Navbar -->

<nav class="bg-slate-900 border-b border-slate-800">


<div class="container mx-auto px-6 py-4 flex justify-between items-center">

    <h1 class="text-2xl font-bold text-cyan-400">
        🚀 Microservices Dashboard
    </h1>

    <div class="flex items-center gap-4">

    <span id="userName"
      class="text-cyan-400 font-semibold">
      Loading...
</span>

    <span id="userRole"
      class="bg-red-600 px-3 py-1 rounded-full text-xs font-bold">
      ADMIN
</span>

    <a href="/" class="text-slate-300 hover:text-white">
        Home
    </a>

    <button
        onclick="logout()"
        class="bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700">
        Logout
    </button>

</div>

</div>


</nav>

<!-- Header -->

<div class="container mx-auto px-6 py-10">


<h2 class="text-5xl font-bold mb-4">
    Restaurant Catalog System
</h2>

<p class="text-slate-400">
    Laravel Microservices Architecture with Docker Container
</p>


</div>

<!-- Service Status -->

<div class="container mx-auto px-6">


<h3 class="text-3xl font-bold mb-6">
    Service Status
</h3>

<div class="grid md:grid-cols-3 gap-6">

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="flex justify-between">

            <h4 class="text-xl font-bold text-blue-400">
                Gateway Service
            </h4>

            <span class="text-green-400">
                ● RUNNING
            </span>

        </div>

        <p class="mt-4 text-slate-400">
            Request Routing & Frontend UI
        </p>

        <div class="mt-4 text-cyan-400">
            Port 8000
        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="flex justify-between">

            <h4 class="text-xl font-bold text-green-400">
                Auth Service
            </h4>

            <span class="text-green-400">
                ● RUNNING
            </span>

        </div>

        <p class="mt-4 text-slate-400">
            JWT Authentication & User Management
        </p>

        <div class="mt-4 text-cyan-400">
            Port 8001
        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="flex justify-between">

            <h4 class="text-xl font-bold text-purple-400">
                Project Service
            </h4>

            <span class="text-green-400">
                ● RUNNING
            </span>

        </div>

        <p class="mt-4 text-slate-400">
            Category, Menu, Recipe CRUD
        </p>

        <div class="mt-4 text-cyan-400">
            Port 8002
        </div>

    </div>

</div>


</div>

<!-- Statistics -->

<div class="container mx-auto px-6 mt-12">


<h3 class="text-3xl font-bold mb-6">
    System Overview
</h3>

<div class="grid md:grid-cols-4 gap-6">

    <div class="bg-blue-600 rounded-2xl p-6 text-center">

        <div class="text-4xl font-bold">
            3
        </div>

        <div>
            Services
        </div>

    </div>

    <div class="bg-green-600 rounded-2xl p-6 text-center">

        <div class="text-4xl font-bold">
            Docker
        </div>

        <div>
            Containerized
        </div>

    </div>

    <div class="bg-purple-600 rounded-2xl p-6 text-center">

        <div class="text-4xl font-bold">
            REST
        </div>

        <div>
            API
        </div>

    </div>

    <div class="bg-orange-600 rounded-2xl p-6 text-center">

        <div class="text-4xl font-bold">
            JWT
        </div>

        <div>
            Security
        </div>

    </div>

</div>


</div>

<!-- Live Statistics -->

<div class="container mx-auto px-6 mt-12">

    <h3 class="text-3xl font-bold mb-6">
        Live Statistics
    </h3>

    <div class="grid md:grid-cols-4 gap-6">

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 text-center">

            <div class="text-5xl mb-3">
                📂
            </div>

            <div class="text-3xl font-bold text-cyan-400">
                2
            </div>

            <div class="text-slate-400">
                Categories
            </div>

        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 text-center">

            <div class="text-5xl mb-3">
                🍽️
            </div>

            <div class="text-3xl font-bold text-green-400">
                3
            </div>

            <div class="text-slate-400">
                Menus
            </div>

        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 text-center">

            <div class="text-5xl mb-3">
                👨‍🍳
            </div>

            <div class="text-3xl font-bold text-purple-400">
                1
            </div>

            <div class="text-slate-400">
                Recipes
            </div>

        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 text-center">

            <div class="text-5xl mb-3">
                ⚡
            </div>

            <div class="text-3xl font-bold text-yellow-400">
                100%
            </div>

            <div class="text-slate-400">
                Services Running
            </div>

        </div>

    </div>

</div>

<!-- Restaurant Features -->

<div class="container mx-auto px-6 mt-12">

    <h3 class="text-3xl font-bold mb-6">
        Restaurant Features
    </h3>

    <div class="grid md:grid-cols-3 gap-6">

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

            <div class="text-5xl mb-4">
                🍔
            </div>

            <h4 class="text-xl font-bold text-yellow-400">
                Menu Management
            </h4>

            <p class="mt-3 text-slate-400">
                Manage restaurant menu data using REST API architecture.
            </p>

        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

            <div class="text-5xl mb-4">
                📖
            </div>

            <h4 class="text-xl font-bold text-green-400">
                Recipe Management
            </h4>

            <p class="mt-3 text-slate-400">
                Store and organize recipes for every menu item.
            </p>

        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

            <div class="text-5xl mb-4">
                🔐
            </div>

            <h4 class="text-xl font-bold text-cyan-400">
                JWT Authentication
            </h4>

            <p class="mt-3 text-slate-400">
                Secure login and registration using JWT authentication.
            </p>

        </div>

    </div>

</div>

<!-- Management Menu -->

<div class="container mx-auto px-6 mt-12">


<h3 class="text-3xl font-bold mb-6">
    Management Menu
</h3>

<div class="grid md:grid-cols-3 gap-6">

    <a href="/categories-page"
       class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-cyan-500 transition">

        <div class="text-5xl mb-4">
            📂
        </div>

        <h4 class="text-xl font-bold text-cyan-400">
            Categories
        </h4>

        <p class="mt-3 text-slate-400">
            View all restaurant categories.
        </p>

    </a>

    <a href="/menus-page"
       class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-green-500 transition">

        <div class="text-5xl mb-4">
            🍽️
        </div>

        <h4 class="text-xl font-bold text-green-400">
            Menus
        </h4>

        <p class="mt-3 text-slate-400">
            Browse all available menu items.
        </p>

    </a>

    <a href="/recipes-page"
       class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:border-purple-500 transition">

        <div class="text-5xl mb-4">
            👨‍🍳
        </div>

        <h4 class="text-xl font-bold text-purple-400">
            Recipes
        </h4>

        <p class="mt-3 text-slate-400">
            View recipe information and ingredients.
        </p>

    </a>

</div>

</div>

<div class="mt-10 text-center">

    <a href="/project/categories"
       class="bg-cyan-600 px-5 py-3 rounded-lg mr-3 hover:bg-cyan-700">
        Raw Categories API
    </a>

    <a href="/project/menus"
       class="bg-green-600 px-5 py-3 rounded-lg mr-3 hover:bg-green-700">
        Raw Menus API
    </a>

    <a href="/project/recipes"
       class="bg-purple-600 px-5 py-3 rounded-lg hover:bg-purple-700">
        Raw Recipes API
    </a>

</div>

<!-- Architecture Overview -->

<div class="container mx-auto px-6 mt-12">

    <h3 class="text-3xl font-bold mb-6">
        Architecture Overview
    </h3>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">

        <div class="grid md:grid-cols-3 gap-6 text-center">

            <div>

                <div class="text-5xl mb-3">
                    🌐
                </div>

                <h4 class="text-xl font-bold text-blue-400">
                    Gateway
                </h4>

                <p class="text-slate-400 mt-2">
                    Frontend UI & Request Routing
                </p>

            </div>

            <div>

                <div class="text-5xl mb-3">
                    🔐
                </div>

                <h4 class="text-xl font-bold text-green-400">
                    Auth Service
                </h4>

                <p class="text-slate-400 mt-2">
                    Login, Register & JWT
                </p>

            </div>

            <div>

                <div class="text-5xl mb-3">
                    📦
                </div>

                <h4 class="text-xl font-bold text-purple-400">
                    Project Service
                </h4>

                <p class="text-slate-400 mt-2">
                    Categories, Menus & Recipes
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Footer -->

<footer class="mt-20 py-8 border-t border-slate-800 text-center text-slate-500">


Cloud Computing - Microservices Project<br>
Telkom University 2026


</footer>

<script>

window.onload = function () {

    const userName =
        localStorage.getItem('user_name');

    console.log(userName);

    if(userName){

        document.getElementById('userName').innerText =
            '👤 ' + userName;

    }

}

function logout(){

    localStorage.removeItem('token');
    localStorage.removeItem('user_name');

    window.location.href = '/login-page';
}

</script>
<script>

const role = localStorage.getItem('role');

if(role !== 'admin'){
    window.location.href = '/dashboard-user';
}

</script>

</body>
</html>
