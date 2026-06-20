<!DOCTYPE html>
<html>
<head>
    <title>Recipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-white min-h-screen">

<div class="container mx-auto p-8">

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-5xl font-bold">
            🍳 Recipes
        </h1>

        <a href="/dashboard"
       class="bg-cyan-600 hover:bg-cyan-700 px-5 py-3 rounded-lg">
        ← Back Dashboard
    </a>

    </div>

    <div class="bg-slate-900 rounded-2xl overflow-hidden border border-slate-800">

        <table class="w-full">

            <thead class="bg-slate-800">

                <tr>
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Menu</th>
                    <th class="p-4 text-left">Ingredients</th>
                    <th class="p-4 text-left">Instructions</th>
                </tr>

            </thead>

            <tbody id="recipeTable"></tbody>

        </table>

    </div>

</div>

<script>

fetch('/project/recipes')
.then(res => res.json())
.then(data => {

    let rows = '';

    data.forEach(item => {

        rows += `
        <tr class="border-b border-slate-800 hover:bg-slate-800">

            <td class="p-4">${item.id}</td>

            <td class="p-4">
                ${item.menu ? item.menu.name : '-'}
            </td>

            <td class="p-4">
                ${item.ingredients}
            </td>

            <td class="p-4">
                ${item.instructions}
            </td>

        </tr>
        `;
    });

    document.getElementById('recipeTable').innerHTML = rows;

});

</script>

</body>
</html>