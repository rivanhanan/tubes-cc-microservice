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
const token=localStorage.getItem('token');
if(!token) location='/login-page';
if(localStorage.getItem('role')==='admin') location='/dashboard';
</script>

<nav class="bg-slate-900 border-b border-slate-800">
<div class="container mx-auto px-6 py-4 flex justify-between items-center">
<h1 class="text-2xl font-bold text-cyan-400">👤 User Dashboard</h1>
<div class="flex items-center gap-3">
<span id="userNameNavbar" class="text-cyan-400 font-semibold">Loading...</span>
<span class="bg-blue-600 px-3 py-1 rounded-full text-xs font-bold">USER</span>
<button onclick="logout()" class="bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700 hover:scale-105 transition duration-300">Logout</button>
</div></div></nav>

<div class="container mx-auto px-6 mt-10">
<div class="bg-gradient-to-r from-cyan-600 to-blue-700 rounded-3xl p-10 shadow-xl">
<h1 class="text-5xl font-bold">🍽 Welcome, <span id="heroUserName">Loading...</span></h1>
<p class="mt-4 text-cyan-100 text-lg">Explore restaurant menus, browse recipes, and discover your favorite food.</p>
</div>

<div class="grid md:grid-cols-3 gap-6 mt-10">
<a href="/categories-page" class="bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:-translate-y-2 hover:border-cyan-500 hover:shadow-xl transition duration-300"><div class="text-6xl mb-5">📂</div><h2 class="text-3xl font-bold text-cyan-400">Categories</h2><p class="text-slate-400 mt-3">Browse all available restaurant categories.</p><div class="mt-6 text-cyan-400 font-bold">View Categories →</div></a>
<a href="/menus-page" class="bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:-translate-y-2 hover:border-green-500 hover:shadow-xl transition duration-300"><div class="text-6xl mb-5">🍽️</div><h2 class="text-3xl font-bold text-green-400">Menus</h2><p class="text-slate-400 mt-3">Browse delicious food and beverages.</p><div class="mt-6 text-green-400 font-bold">View Menus →</div></a>
<a href="/recipes-page" class="bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:-translate-y-2 hover:border-purple-500 hover:shadow-xl transition duration-300"><div class="text-6xl mb-5">👨‍🍳</div><h2 class="text-3xl font-bold text-purple-400">Recipes</h2><p class="text-slate-400 mt-3">View recipe ingredients and cooking steps.</p><div class="mt-6 text-purple-400 font-bold">View Recipes →</div></a>
</div>

<div class="mt-12">
<h3 class="text-3xl font-bold mb-6">⭐ Today's Recommendation</h3>
<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col md:flex-row items-center gap-6 hover:border-yellow-400 hover:shadow-xl transition">
<img src="/images/Nasi-Goreng-Spesial.jpg" class="w-44 h-44 rounded-xl object-cover">
<div><h4 class="text-3xl font-bold text-yellow-400">Nasi Goreng Spesial</h4><p class="text-slate-400 mt-3">Nasi goreng dengan telur, ayam, dan bumbu khas restoran.</p><div class="text-yellow-400 mt-3">⭐⭐⭐⭐⭐</div><div class="text-green-400 font-bold text-2xl mt-4">Rp 25.000</div><a href="/menus-page" class="inline-block mt-5 bg-yellow-500 hover:bg-yellow-600 px-5 py-3 rounded-xl font-bold text-black">View Menu →</a></div>
</div></div>

<div class="mt-12">
<h3 class="text-3xl font-bold mb-6">Restaurant Features</h3>
<div class="grid md:grid-cols-3 gap-6">
<div class="bg-slate-900 rounded-2xl border border-slate-800 p-6 hover:border-cyan-400 hover:-translate-y-2 transition"><div class="text-5xl">🍽️</div><h4 class="text-2xl font-bold text-cyan-400 mt-4">Browse Menu</h4><p class="text-slate-400 mt-3">Explore delicious food and drinks available in our restaurant.</p></div>
<div class="bg-slate-900 rounded-2xl border border-slate-800 p-6 hover:border-green-400 hover:-translate-y-2 transition"><div class="text-5xl">📖</div><h4 class="text-2xl font-bold text-green-400 mt-4">Recipe Information</h4><p class="text-slate-400 mt-3">View ingredients and cooking instructions for every menu.</p></div>
<div class="bg-slate-900 rounded-2xl border border-slate-800 p-6 hover:border-purple-400 hover:-translate-y-2 transition"><div class="text-5xl">⭐</div><h4 class="text-2xl font-bold text-purple-400 mt-4">Best Quality</h4><p class="text-slate-400 mt-3">Fresh ingredients and carefully selected restaurant menus.</p></div>
</div></div>
</div>

<footer class="mt-20 border-t border-slate-800"><div class="container mx-auto px-6 py-10 text-center"><h3 class="text-2xl font-bold">🍽 Restaurant Management System</h3><p class="text-slate-400 mt-3">Built with Laravel • Docker • REST API • JWT Authentication</p><p class="text-slate-500 mt-5">Cloud Computing Final Project</p><p class="text-slate-600">Telkom University 2026</p><p class="text-slate-700 text-sm mt-5">© 2026 Restaurant Management System</p></div></footer>

<script>
window.onload=function(){
 const n=localStorage.getItem('user_name');
 if(n){
  document.getElementById('userNameNavbar').innerHTML="👤 "+n;
  document.getElementById('heroUserName').innerHTML=n;
 }
}
function logout(){
 localStorage.removeItem('token');
 localStorage.removeItem('user_name');
 localStorage.removeItem('role');
 location='/login-page';
}
</script>
</body></html>