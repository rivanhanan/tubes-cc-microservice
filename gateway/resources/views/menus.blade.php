<!DOCTYPE html>
<html>
<head>
    <title>Menus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-white">

<div class="container mx-auto p-8">

    <div class="flex justify-between items-center mb-8">

    <h1 class="text-5xl font-bold">
        🍽️ Menu List
    </h1>

    <a href="/dashboard"
       class="bg-cyan-600 px-6 py-3 rounded-lg hover:bg-cyan-700">
        ← Back Dashboard
    </a>

</div>

    <table class="w-full bg-slate-800 rounded-xl overflow-hidden">

        <thead class="bg-slate-700">

            <tr>
                <th class="p-4">ID</th>
                <th class="p-4">Name</th>
                <th class="p-4">Price</th>
                <th class="p-4">Description</th>
            </tr>

        </thead>

        <tbody id="menuTable"></tbody>

    </table>

</div>

<script>

fetch('/project/menus')
.then(res => res.json())
.then(data => {

    let rows = '';

    data.forEach((item,index) => {

        rows += `
            <tr class="border-b border-slate-700">
                <td class="p-4">${index + 1}</td>
                <td class="p-4">${item.name}</td>
                <td class="p-4">Rp ${item.price}</td>
                <td class="p-4">${item.description ?? '-'}</td>
            </tr>
        `;

    });

    document.getElementById('menuTable').innerHTML = rows;

});

</script>

</body>
</html>