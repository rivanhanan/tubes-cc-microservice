<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Catalog & Recipe System</title>


<script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-slate-950 text-white">


<!-- Navbar -->
<nav class="bg-slate-900 border-b border-slate-800">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-bold text-cyan-400">
            🍽 Restaurant Microservices
        </h1>

        <div class="space-x-3">
            <a href="/login-page"
               class="px-5 py-2 bg-blue-600 rounded-lg hover:bg-blue-700">
                Login
            </a>

            <a href="/register-page"
               class="px-5 py-2 bg-green-600 rounded-lg hover:bg-green-700">
                Register
            </a>
        </div>

    </div>
</nav>

<!-- Hero -->
<section class="container mx-auto px-6 py-24 text-center">

    <h1 class="text-6xl font-extrabold mb-6">
        Restaurant Catalog &
        <span class="text-cyan-400">
            Recipe System
        </span>
    </h1>

    <p class="text-xl text-slate-400 max-w-3xl mx-auto">
        Sistem manajemen menu dan resep restoran berbasis
        Laravel Microservices Architecture menggunakan
        Gateway Service, Auth Service, Project Service,
        Docker Container, dan REST API.
    </p>

    <div class="mt-10 space-x-4">
        <a href="/dashboard"
           class="bg-purple-600 hover:bg-purple-700 px-8 py-4 rounded-xl text-lg">
            Open Dashboard
        </a>

        <a href="/project/menus"
           class="bg-cyan-600 hover:bg-cyan-700 px-8 py-4 rounded-xl text-lg">
            View API
        </a>
    </div>

</section>

<!-- Architecture -->
<section class="container mx-auto px-6 py-10">

    <h2 class="text-4xl font-bold text-center mb-12">
        Microservices Architecture
    </h2>

    <div class="grid md:grid-cols-4 gap-6">

        <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">
            <h3 class="text-xl font-bold text-orange-400 mb-2">
                Client Browser
            </h3>

            <p class="text-slate-400">
                User mengakses aplikasi melalui browser.
            </p>
        </div>

        <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">
            <h3 class="text-xl font-bold text-blue-400 mb-2">
                Gateway Service
            </h3>

            <p class="text-slate-400">
                Routing request, load balancing, dan frontend UI.
            </p>

            <span class="text-green-400">
                ● Port 8000
            </span>
        </div>

        <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">
            <h3 class="text-xl font-bold text-green-400 mb-2">
                Auth Service
            </h3>

            <p class="text-slate-400">
                Login, Register, JWT Authentication.
            </p>

            <span class="text-green-400">
                ● Port 8001
            </span>
        </div>

        <div class="bg-slate-900 p-6 rounded-2xl border border-slate-800">
            <h3 class="text-xl font-bold text-purple-400 mb-2">
                Project Service
            </h3>

            <p class="text-slate-400">
                CRUD Menu, Category, Recipe.
            </p>

            <span class="text-green-400">
                ● Port 8002
            </span>
        </div>

    </div>

</section>

<!-- Features -->
<section class="container mx-auto px-6 py-20">

    <h2 class="text-4xl font-bold text-center mb-12">
        Features
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        <div class="bg-slate-900 p-6 rounded-2xl">
            <h3 class="text-2xl font-bold mb-3">
                JWT Authentication
            </h3>

            <p class="text-slate-400">
                Secure login dan register menggunakan token JWT.
            </p>
        </div>

        <div class="bg-slate-900 p-6 rounded-2xl">
            <h3 class="text-2xl font-bold mb-3">
                Menu Management
            </h3>

            <p class="text-slate-400">
                CRUD data menu restoran secara terpisah melalui Project Service.
            </p>
        </div>

        <div class="bg-slate-900 p-6 rounded-2xl">
            <h3 class="text-2xl font-bold mb-3">
                Dockerized System
            </h3>

            <p class="text-slate-400">
                Semua service berjalan di Docker Container.
            </p>
        </div>

    </div>

</section>

<!-- Footer -->
<footer class="bg-slate-900 border-t border-slate-800 py-6 mt-10">

    <div class="text-center text-slate-500">
        Telkom University • Cloud Computing Microservices Project • 2026
    </div>

</footer>
```

</body>
</html>
