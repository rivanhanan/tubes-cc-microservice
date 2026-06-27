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

<nav class="bg-slate-900/95 backdrop-blur-md border-b border-slate-800 shadow-lg sticky top-0 z-50">

<div class="container mx-auto px-6 py-4 flex justify-between items-center">

    <!-- Logo -->

    <div>

        <h1 class="text-3xl font-bold text-cyan-400">

            🍽 Restaurant Admin

        </h1>

        <p class="text-slate-400 text-sm mt-1">

            Laravel Microservices Dashboard

        </p>

    </div>

    <!-- Right Menu -->

    <div class="flex items-center gap-4">

        <div class="text-right">

            <div
                id="userName"
                class="text-cyan-400 font-bold">

                Loading...

            </div>

            <div class="text-slate-400 text-xs">

                Welcome Back 👋

            </div>

        </div>

        <span
            id="userRole"
            class="bg-gradient-to-r from-red-500 to-red-700 px-4 py-2 rounded-full text-xs font-bold shadow">

            ADMIN

        </span>

        <a
            href="/"
            class="bg-slate-800 hover:bg-slate-700 px-4 py-2 rounded-lg transition duration-300">

            🏠 Home

        </a>

        <button
            onclick="logout()"
            class="bg-red-600 hover:bg-red-700 hover:scale-105 transition duration-300 px-5 py-2 rounded-lg font-semibold shadow">

            🚪 Logout

        </button>

    </div>

</div>

</nav>

<!-- Hero Dashboard -->

<div class="container mx-auto px-6 py-10">

    <div class="bg-gradient-to-r from-cyan-600 via-blue-700 to-indigo-700 rounded-3xl p-10 shadow-2xl overflow-hidden relative">

        <!-- Background Decoration -->

        <div class="absolute right-8 top-6 text-8xl opacity-10">
            🍽️
        </div>

        <div class="relative">

            <span class="inline-flex items-center bg-green-500/20 text-green-200 px-4 py-2 rounded-full text-sm font-semibold border border-green-400 mb-5">

                🟢 System Healthy

            </span>

            <h2 class="text-5xl font-bold text-white leading-tight">

                Restaurant Management Dashboard

            </h2>

            <p class="text-cyan-100 mt-4 text-lg max-w-3xl">

                Manage Categories, Menus, Recipes, and Restaurant Services
                through a modern Laravel Microservices Architecture.

            </p>

            <div class="flex flex-wrap gap-4 mt-8">

                <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-xl">

                    <div class="text-sm text-cyan-100">

                        Welcome Back

                    </div>

                    <div id="heroUserName"
                         class="font-bold text-white text-xl">

                        Loading...

                    </div>

                </div>

                <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-xl">

                    <div class="text-sm text-cyan-100">

                        Status

                    </div>

                    <div class="font-bold text-green-300">

                        🟢 All Services Running

                    </div>

                </div>

                <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-xl">

                    <div class="text-sm text-cyan-100">

                        Version

                    </div>

                    <div class="font-bold text-white">

                        v1.0.0

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Service Status -->

<div class="container mx-auto px-6 mt-12">

<h3 class="text-3xl font-bold mb-6">

🖥 Service Status

</h3>

<div class="grid md:grid-cols-3 gap-6">

<!-- Gateway -->

<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-cyan-500 hover:shadow-cyan-500/20 hover:shadow-xl transition duration-300">

<div class="flex justify-between items-center">

<div>

<div class="text-4xl mb-2">
🌐
</div>

<h4 class="text-2xl font-bold text-cyan-400">

Gateway Service

</h4>

</div>

<span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-500">

🟢 Healthy

</span>

</div>

<p class="mt-5 text-slate-400">

Handles all incoming requests and routes them to the appropriate microservice.

</p>

<div class="mt-6 flex justify-between items-center">

<div class="text-cyan-400 font-bold">

Port 8000

</div>

<div class="text-slate-500 text-sm">

Frontend

</div>

</div>

</div>

<!-- Auth -->

<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-green-500 hover:shadow-green-500/20 hover:shadow-xl transition duration-300">

<div class="flex justify-between items-center">

<div>

<div class="text-4xl mb-2">
🔐
</div>

<h4 class="text-2xl font-bold text-green-400">

Auth Service

</h4>

</div>

<span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-500">

🟢 Healthy

</span>

</div>

<p class="mt-5 text-slate-400">

JWT Authentication, Login, Register and User Authorization.

</p>

<div class="mt-6 flex justify-between items-center">

<div class="text-cyan-400 font-bold">

Port 8001

</div>

<div class="text-slate-500 text-sm">

Security

</div>

</div>

</div>

<!-- Project -->

<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-purple-500 hover:shadow-purple-500/20 hover:shadow-xl transition duration-300">

<div class="flex justify-between items-center">

<div>

<div class="text-4xl mb-2">
📦
</div>

<h4 class="text-2xl font-bold text-purple-400">

Project Service

</h4>

</div>

<span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm font-semibold border border-green-500">

🟢 Healthy

</span>

</div>

<p class="mt-5 text-slate-400">

Handles Categories, Menus, Recipes and Restaurant Data.

</p>

<div class="mt-6 flex justify-between items-center">

<div class="text-cyan-400 font-bold">

Port 8002

</div>

<div class="text-slate-500 text-sm">

Database

</div>

</div>

</div>

</div>


</div>

<!-- Live Statistics -->

<div class="container mx-auto px-6 mt-12">

    <h3 class="text-3xl font-bold mb-6">
    📊 Restaurant Statistics
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
                9
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
                9
            </div>

            <div class="text-slate-400">
                Recipes
            </div>

        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 text-center hover:-translate-y-2 hover:border-orange-500 hover:shadow-orange-500/20 hover:shadow-xl transition duration-300">

    <div class="text-5xl mb-3">
        👥
    </div>

    <div class="text-3xl font-bold text-orange-400">
        2
    </div>

    <div class="text-slate-400">
        Users
    </div>

</div>

    </div>

</div>

<!-- Restaurant Features -->

<div class="container mx-auto px-6 mt-12">

    <h3 class="text-3xl font-bold mb-6">
        🍽 Restaurant Features
    </h3>

    <div class="grid md:grid-cols-3 gap-6">

        <!-- Menu Management -->

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-yellow-400 hover:shadow-yellow-500/20 hover:shadow-xl transition duration-300">

            <div class="flex justify-between items-center">

                <div class="text-5xl">
                    🍔
                </div>

                <span class="bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full text-xs font-semibold border border-yellow-500">
                    FEATURE
                </span>

            </div>

            <h4 class="text-2xl font-bold text-yellow-400 mt-5">
                Menu Management
            </h4>

            <p class="mt-3 text-slate-400">
                Create, update, delete, and organize restaurant menus using REST API architecture.
            </p>

            <div class="mt-6 text-yellow-400 font-semibold">
                Manage Menus →
            </div>

        </div>

        <!-- Recipe -->

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-green-400 hover:shadow-green-500/20 hover:shadow-xl transition duration-300">

            <div class="flex justify-between items-center">

                <div class="text-5xl">
                    👨‍🍳
                </div>

                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-xs font-semibold border border-green-500">
                    FEATURE
                </span>

            </div>

            <h4 class="text-2xl font-bold text-green-400 mt-5">
                Recipe Management
            </h4>

            <p class="mt-3 text-slate-400">
                Store ingredients and cooking instructions for every restaurant menu.
            </p>

            <div class="mt-6 text-green-400 font-semibold">
                Manage Recipes →
            </div>

        </div>

        <!-- Security -->

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-cyan-400 hover:shadow-cyan-500/20 hover:shadow-xl transition duration-300">

            <div class="flex justify-between items-center">

                <div class="text-5xl">
                    🔐
                </div>

                <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-xs font-semibold border border-cyan-500">
                    SECURITY
                </span>

            </div>

            <h4 class="text-2xl font-bold text-cyan-400 mt-5">
                JWT Authentication
            </h4>

            <p class="mt-3 text-slate-400">
                Secure login system using JSON Web Token authentication with role-based access.
            </p>

            <div class="mt-6 text-cyan-400 font-semibold">
                Authentication →
            </div>

        </div>

    </div>

</div>

<!-- Management Menu -->

<div class="container mx-auto px-6 mt-12">

    <h3 class="text-3xl font-bold mb-6">
        ⚙️ Management Menu
    </h3>

    <div class="grid md:grid-cols-3 gap-6">

        <!-- Categories -->

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-cyan-500 hover:shadow-cyan-500/20 hover:shadow-xl transition duration-300">

            <div class="flex justify-between items-center">

                <div class="text-5xl">
                    📂
                </div>

                <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-xs font-semibold border border-cyan-500">
                    2 DATA
                </span>

            </div>

            <h4 class="text-2xl font-bold text-cyan-400 mt-5">
                Categories
            </h4>

            <p class="text-slate-400 mt-3">
                Manage restaurant categories such as Food and Beverage.
            </p>

            <div class="mt-6 flex justify-between items-center">

                <a href="/categories-page"
                   class="text-cyan-400 font-semibold hover:text-cyan-300">

                    Open Management →

                </a>

                <a href="/project/categories"
                   class="text-xs text-slate-400 hover:text-white">

                    API

                </a>

            </div>

        </div>

        <!-- Menus -->

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-green-500 hover:shadow-green-500/20 hover:shadow-xl transition duration-300">

            <div class="flex justify-between items-center">

                <div class="text-5xl">
                    🍽️
                </div>

                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-xs font-semibold border border-green-500">
                    9 DATA
                </span>

            </div>

            <h4 class="text-2xl font-bold text-green-400 mt-5">
                Menus
            </h4>

            <p class="text-slate-400 mt-3">
                Create, update and manage all restaurant food and beverage menus.
            </p>

            <div class="mt-6 flex justify-between items-center">

                <a href="/menus-page"
                   class="text-green-400 font-semibold hover:text-green-300">

                    Open Management →

                </a>

                <a href="/project/menus"
                   class="text-xs text-slate-400 hover:text-white">

                    API

                </a>

            </div>

        </div>

        <!-- Recipes -->

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 hover:-translate-y-2 hover:border-purple-500 hover:shadow-purple-500/20 hover:shadow-xl transition duration-300">

            <div class="flex justify-between items-center">

                <div class="text-5xl">
                    👨‍🍳
                </div>

                <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-xs font-semibold border border-purple-500">
                    9 DATA
                </span>

            </div>

            <h4 class="text-2xl font-bold text-purple-400 mt-5">
                Recipes
            </h4>

            <p class="text-slate-400 mt-3">
                Store ingredients and cooking instructions for every menu.
            </p>

            <div class="mt-6 flex justify-between items-center">

                <a href="/recipes-page"
                   class="text-purple-400 font-semibold hover:text-purple-300">

                    Open Management →

                </a>

                <a href="/project/recipes"
                   class="text-xs text-slate-400 hover:text-white">

                    API

                </a>

            </div>

        </div>

    </div>

</div>

<!-- Architecture Overview -->

<div class="container mx-auto px-6 mt-12">

    <h3 class="text-3xl font-bold mb-6">
        🏗️ Microservices Architecture
    </h3>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-10">

        <div class="flex flex-col md:flex-row items-center justify-between gap-8">

            <!-- Browser -->

            <div class="text-center">

                <div class="text-6xl">
                    💻
                </div>

                <h4 class="text-xl font-bold text-cyan-400 mt-3">
                    Client
                </h4>

                <p class="text-slate-400 mt-2">
                    Web Browser
                </p>

            </div>

            <div class="text-5xl text-slate-500">
                ➜
            </div>

            <!-- Gateway -->

            <div class="text-center">

                <div class="text-6xl">
                    🌐
                </div>

                <h4 class="text-xl font-bold text-blue-400 mt-3">
                    Gateway
                </h4>

                <p class="text-slate-400 mt-2">
                    Frontend UI<br>
                    Request Routing
                </p>

            </div>

            <div class="text-5xl text-slate-500">
                ➜
            </div>

            <!-- Auth -->

            <div class="text-center">

                <div class="text-6xl">
                    🔐
                </div>

                <h4 class="text-xl font-bold text-green-400 mt-3">
                    Auth Service
                </h4>

                <p class="text-slate-400 mt-2">
                    Login<br>
                    JWT Authentication
                </p>

            </div>

            <div class="text-5xl text-slate-500">
                ➜
            </div>

            <!-- Project -->

            <div class="text-center">

                <div class="text-6xl">
                    📦
                </div>

                <h4 class="text-xl font-bold text-purple-400 mt-3">
                    Project Service
                </h4>

                <p class="text-slate-400 mt-2">
                    Category<br>
                    Menu & Recipe
                </p>

            </div>

            <div class="text-5xl text-slate-500">
                ➜
            </div>

            <!-- Database -->

            <div class="text-center">

                <div class="text-6xl">
                    🗄️
                </div>

                <h4 class="text-xl font-bold text-orange-400 mt-3">
                    SQLite
                </h4>

                <p class="text-slate-400 mt-2">
                    Database
                </p>

            </div>

        </div>

        <!-- Description -->

        <div class="mt-10 border-t border-slate-700 pt-6">

            <p class="text-center text-slate-400 leading-8">

                Every client request is received by the <span class="text-cyan-400 font-semibold">Gateway</span>,
                authenticated through the <span class="text-green-400 font-semibold">Auth Service</span>,
                processed by the <span class="text-purple-400 font-semibold">Project Service</span>,
                and finally stored in the <span class="text-orange-400 font-semibold">SQLite Database</span>.

            </p>

        </div>

    </div>

</div>

<!-- Footer -->

<footer class="mt-20 border-t border-slate-800 bg-slate-950">

<div class="container mx-auto px-6 py-10">

    <div class="grid md:grid-cols-3 gap-10">

        <!-- Project -->

        <div>

            <h3 class="text-2xl font-bold text-white">

                🍽 Restaurant Management System

            </h3>

            <p class="text-slate-400 mt-4 leading-7">

                Modern Restaurant Management application built using
                Laravel Microservices Architecture with Docker,
                REST API and JWT Authentication.

            </p>

        </div>

        <!-- Technology -->

        <div>

            <h3 class="text-xl font-bold text-cyan-400 mb-4">

                ⚙ Technology Stack

            </h3>

            <ul class="space-y-2 text-slate-400">

                <li>✅ Laravel 12</li>

                <li>✅ Docker</li>

                <li>✅ REST API</li>

                <li>✅ JWT Authentication</li>

                <li>✅ SQLite Database</li>

                <li>✅ Microservices</li>

            </ul>

        </div>

        <!-- Information -->

        <div>

            <h3 class="text-xl font-bold text-green-400 mb-4">

                📚 Project Information

            </h3>

            <ul class="space-y-2 text-slate-400">

                <li>Cloud Computing Final Project</li>

                <li>Telkom University</li>

                <li>Academic Year 2025 / 2026</li>

                <li>Version 1.0.0</li>

            </ul>

        </div>

    </div>

    <div class="border-t border-slate-800 mt-10 pt-6 text-center">

        <p class="text-slate-500">

            © 2026 Restaurant Management System

        </p>

        <p class="text-slate-600 mt-2 text-sm">

            Built with ❤️ using Laravel • Docker • REST API • JWT Authentication

        </p>

    </div>

</div>

</footer>

<script>

window.onload = function () {

    const userName =
        localStorage.getItem('user_name');

    console.log(userName);

    if(userName){

        document.getElementById('userName').innerHTML =
    '👤 ' + userName;

document.getElementById('heroUserName').innerHTML =
    userName;

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
