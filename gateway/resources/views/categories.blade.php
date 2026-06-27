<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-white min-h-screen">

<div class="container mx-auto p-8">

    <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-6">

    <div>

        <h1 class="text-5xl font-bold">
            📂 Category Management
        </h1>

        <p class="text-slate-400 mt-3 text-lg">
            Manage restaurant categories and organize menu classifications.
        </p>

    </div>

    <a href="/dashboard"
       class="bg-cyan-600 hover:bg-cyan-700 hover:scale-105 transition duration-300 px-6 py-3 rounded-xl font-semibold shadow-lg">

        ← Back Dashboard

    </a>

</div>

<div class="grid md:grid-cols-3 gap-6 mb-10">

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">
            📂
        </div>

        <div class="text-4xl font-bold text-cyan-400 mt-4">

            2

        </div>

        <div class="text-slate-400">

            Total Categories

        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">
            🍽️
        </div>

        <div class="text-4xl font-bold text-green-400 mt-4">

            9

        </div>

        <div class="text-slate-400">

            Available Menus

        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">
            👨‍🍳
        </div>

        <div class="text-4xl font-bold text-purple-400 mt-4">

            9

        </div>

        <div class="text-slate-400">

            Recipes

        </div>

    </div>

</div>
    <div class="flex justify-end mb-6">

<button
onclick="openAddModal()"
class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded-xl font-bold shadow-lg">

➕ Add Category

</button>

</div>
    <div class="bg-slate-900 rounded-3xl overflow-hidden border border-slate-800 shadow-2xl">

        <table class="w-full">

            <thead class="bg-gradient-to-r from-cyan-700 to-blue-700 text-white">

                <tr>

    <th class="p-5">ID</th>

    <th class="p-5">Icon</th>

    <th class="p-5">Category</th>

    <th class="p-5">Description</th>

</tr>

            </thead>

            <tbody id="categoryTable"></tbody>

        </table>

    </div>

</div>
<div
id="categoryModal"
class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">

<div class="bg-slate-900 rounded-2xl w-[500px] p-8">

<h2
id="modalTitle"
class="text-3xl font-bold mb-6">

Add Category

</h2>

<input

id="categoryName"

placeholder="Category Name"

class="w-full mb-4 p-3 rounded bg-slate-800">

<textarea

id="categoryDescription"

placeholder="Description"

class="w-full mb-6 p-3 rounded bg-slate-800">

</textarea>

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

loadCategories();

function loadCategories(){

fetch('/project/categories')

.then(res=>res.json())

.then(data=>{

let rows='';

data.forEach(item=>{

rows+=`
<tr class="border-b border-slate-800 hover:bg-slate-800">

<td class="p-5">${item.id}</td>

<td class="p-5 text-3xl">

${item.name.toLowerCase().includes('makanan') ? '🍔' : '🥤'}

</td>

<td class="p-5">

<span class="bg-cyan-600 px-4 py-2 rounded-full">

${item.name}

</span>

</td>

<td class="p-5">

${item.description ?? '-'}

</td>

<td class="p-5">

<div class="flex gap-2 justify-center">

<button

onclick="editCategory(${item.id},'${item.name}','${item.description ?? ''}')"

class="bg-yellow-500 hover:bg-yellow-600 px-3 py-2 rounded">

✏

</button>

<button

onclick="deleteCategory(${item.id})"

class="bg-red-600 hover:bg-red-700 px-3 py-2 rounded">

🗑

</button>

</div>

</td>

</tr>
`;

});

document.getElementById('categoryTable').innerHTML=rows;

});

}
function openAddModal(){

editId=null;

document.getElementById('modalTitle').innerHTML='Add Category';

document.getElementById('categoryName').value='';

document.getElementById('categoryDescription').value='';

document.getElementById('categoryModal').classList.remove('hidden');

}
function closeModal(){

document.getElementById('categoryModal').classList.add('hidden');

}
function editCategory(id,name,description){

editId=id;

document.getElementById('modalTitle').innerHTML='Edit Category';

document.getElementById('categoryName').value=name;

document.getElementById('categoryDescription').value=description;

document.getElementById('categoryModal').classList.remove('hidden');

}
document.getElementById('saveBtn').onclick = function () {

    const name = document.getElementById('categoryName').value;
    const description = document.getElementById('categoryDescription').value;

    const data = {
        name: name,
        description: description
    };

    // CREATE
    if (editId == null) {

        fetch('/project/categories', {

            method: 'POST',

            headers: {
                'Content-Type': 'application/json'
            },

            body: JSON.stringify(data)

        })

        .then(res => res.json())

        .then(() => {

            alert('✅ Category berhasil ditambahkan');

            closeModal();

            loadCategories();

        });

    }

    // UPDATE
    else {

        fetch('/project/categories/' + editId, {

            method: 'PUT',

            headers: {
                'Content-Type': 'application/json'
            },

            body: JSON.stringify(data)

        })

        .then(res => res.json())

        .then(() => {

            alert('✅ Category berhasil diupdate');

            closeModal();

            loadCategories();

        });

    }

}
function deleteCategory(id){

    if(!confirm('Hapus category ini?')){

        return;

    }

    fetch('/project/categories/' + id,{

        method:'DELETE'

    })

    .then(res=>res.json())

    .then(()=>{

        alert('✅ Category berhasil dihapus');

        loadCategories();

    });

}
</script>

</body>
</html>