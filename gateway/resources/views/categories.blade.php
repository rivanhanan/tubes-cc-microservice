<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-white min-h-screen">

<div class="container mx-auto p-8">

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-5xl font-bold">
            📂 Categories
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
                    <th class="p-4 text-left">Category</th>
                    <th class="p-4 text-left">Description</th>
                </tr>

            </thead>

            <tbody id="categoryTable"></tbody>

        </table>

    </div>

</div>

<script>

fetch('/project/categories')
.then(res => res.json())
.then(data => {

    let rows = '';

    data.forEach(item => {

        rows += `
        <tr class="border-b border-slate-800 hover:bg-slate-800">

            <td class="p-4">${item.id}</td>

            <td class="p-4">
                <span class="bg-cyan-600 px-3 py-1 rounded-full">
                    ${item.name}
                </span>
            </td>

            <td class="p-4">
                ${item.description ?? '-'}
            </td>

        </tr>
        `;
    });

    document.getElementById('categoryTable').innerHTML = rows;

});

</script>

</body>
</html>