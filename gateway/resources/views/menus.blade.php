<!DOCTYPE html>
<html>
<head>
    <title>Menus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-white">

<div class="container mx-auto p-8">

    <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-6">

    <div>

        <h1 class="text-5xl font-bold">
            🍽️ Menu Management
        </h1>

        <p class="text-slate-400 mt-3 text-lg">
            Browse and manage all restaurant food and beverage menus.
        </p>

    </div>

    <a href="/dashboard"
       class="bg-cyan-600 hover:bg-cyan-700 hover:scale-105 transition duration-300 px-6 py-3 rounded-xl font-semibold shadow-lg">

        ← Back Dashboard

    </a>

</div>

<div class="grid md:grid-cols-4 gap-6 mb-10">

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">🍽️</div>

        <div class="text-4xl font-bold text-green-400 mt-4">
            9
        </div>

        <div class="text-slate-400">
            Total Menus
        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">🍔</div>

        <div class="text-4xl font-bold text-yellow-400 mt-4">
            Food
        </div>

        <div class="text-slate-400">
            Main Course
        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">🥤</div>

        <div class="text-4xl font-bold text-cyan-400 mt-4">
            Drink
        </div>

        <div class="text-slate-400">
            Beverage
        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">⭐</div>

        <div class="text-4xl font-bold text-orange-400 mt-4">
            Fresh
        </div>

        <div class="text-slate-400">
            Quality Food
        </div>

    </div>

</div>

<div class="flex justify-end mb-6">

<button
onclick="openAddModal()"
class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded-xl font-bold shadow-lg">

➕ Add Menu

</button>

</div>
    <div class="bg-slate-900 rounded-3xl overflow-hidden border border-slate-800 shadow-2xl">

<table class="w-full">

        <thead class="bg-gradient-to-r from-green-700 to-cyan-700 text-white">

           <tr>

    <th class="p-4">ID</th>

    <th class="p-4">Photo</th>

    <th class="p-4">Category</th>

    <th class="p-4">Name</th>

    <th class="p-4">Price</th>

    <th class="p-4">Description</th>

    <th class="p-4 text-center">Action</th>

</tr>

        </thead>

        <tbody id="menuTable"></tbody>

    </table>

</div>

<div
id="menuModal"
class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">

<div class="bg-slate-900 rounded-2xl w-[600px] p-8">

<h2
id="modalTitle"
class="text-3xl font-bold mb-6">

Add Menu

</h2>

<select
id="menuCategory"
class="w-full mb-4 p-3 rounded bg-slate-800">

<option value="">Loading Categories...</option>

</select>

<input
id="menuName"
placeholder="Menu Name"
class="w-full mb-4 p-3 rounded bg-slate-800">

<input
id="menuPrice"
type="number"
placeholder="Price"
class="w-full mb-4 p-3 rounded bg-slate-800">

<input
id="menuImage"
placeholder="Image Filename (contoh: nasi-goreng.jpg)"
class="w-full mb-4 p-3 rounded bg-slate-800">

<textarea
id="menuDescription"
placeholder="Description"
class="w-full mb-6 p-3 rounded bg-slate-800"></textarea>

<div class="flex justify-end gap-3">

<button
onclick="closeModal()"
class="bg-gray-600 px-5 py-2 rounded">

Cancel

</button>

<button
id="saveBtn"
class="bg-green-600 px-5 py-2 rounded">

Save

</button>

</div>

</div>

</div>

<script>

let editId = null;

loadMenus();
loadCategories();

function loadMenus(){

    fetch('/project/menus')
    .then(res => res.json())
    .then(data => {

        let rows = '';

data.forEach((item,index)=>{

rows += `

<tr class="border-b border-slate-700 hover:bg-slate-800 transition duration-300">

    <td class="p-4">
        ${index + 1}
    </td>

    <td class="p-4">

    <img
        src="/images/${item.image}"
        class="w-28 h-28 object-cover rounded-xl shadow-lg"
        alt="${item.name}">

</td>

<td class="p-4">

<span class="bg-cyan-600 px-3 py-2 rounded-full font-semibold">

${item.category ? item.category.name : '-'}

</span>

</td>

<td class="p-4">

<div class="font-bold text-lg text-white">

${item.name}

</div>

</td>

    <td class="p-4">

<span class="bg-green-600 px-4 py-2 rounded-full font-bold">

Rp ${item.price}

</span>

</td>

<td class="p-4 text-slate-300">

${item.description ?? '-'}

</td>

<td class="p-4">

<div class="flex gap-2 justify-center">

<button

onclick="editMenu(

${item.id},

${item.category_id},

'${item.name}',

${item.price},

'${item.image ?? ''}',

'${item.description ?? ''}'

)"

class="bg-yellow-500 hover:bg-yellow-600 px-3 py-2 rounded">

✏

</button>

<button

onclick="deleteMenu(${item.id})"

class="bg-red-600 hover:bg-red-700 px-3 py-2 rounded">

🗑

</button>

</div>

</td>

</tr>
`;

    });

    document.getElementById('menuTable').innerHTML = rows;

});

}

function loadCategories(){

fetch('/project/categories')

.then(res=>res.json())

.then(data=>{

let option='';

data.forEach(item=>{

option += `

<option value="${item.id}">

${item.name}

</option>

`;

});

document.getElementById('menuCategory').innerHTML = option;

});

}

function openAddModal(){

editId = null;

document.getElementById('modalTitle').innerHTML = 'Add Menu';

document.getElementById('menuCategory').selectedIndex = 0;

document.getElementById('menuName').value = '';

document.getElementById('menuPrice').value = '';

document.getElementById('menuImage').value = '';

document.getElementById('menuDescription').value = '';

document.getElementById('menuModal').classList.remove('hidden');

}

function closeModal(){

document.getElementById('menuModal').classList.add('hidden');

}
function editMenu(

id,

category_id,

name,

price,

image,

description

){

editId = id;

document.getElementById('modalTitle').innerHTML = 'Edit Menu';

document.getElementById('menuCategory').value = category_id;

document.getElementById('menuName').value = name;

document.getElementById('menuPrice').value = price;

document.getElementById('menuImage').value = image;

document.getElementById('menuDescription').value = description;

document.getElementById('menuModal').classList.remove('hidden');

}
</script>

</body>
</html>