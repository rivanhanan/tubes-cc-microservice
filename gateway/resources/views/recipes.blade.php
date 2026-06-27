<!DOCTYPE html>
<html>
<head>
    <title>Recipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-white min-h-screen">

<div class="container mx-auto p-8">

    <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-6">

    <div>

        <h1 class="text-5xl font-bold">
            👨‍🍳 Recipe Management
        </h1>

        <p class="text-slate-400 mt-3 text-lg">
            Manage ingredients and cooking instructions for every restaurant menu.
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
            👨‍🍳
        </div>

        <div class="text-4xl font-bold text-purple-400 mt-4">
            9
        </div>

        <div class="text-slate-400">
            Total Recipes
        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">
            🥬
        </div>

        <div class="text-4xl font-bold text-green-400 mt-4">
            Fresh
        </div>

        <div class="text-slate-400">
            Ingredients
        </div>

    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">

        <div class="text-5xl">
            🔥
        </div>

        <div class="text-4xl font-bold text-orange-400 mt-4">
            Easy
        </div>

        <div class="text-slate-400">
            Cooking Steps
        </div>

    </div>

</div>

<div class="flex justify-end mb-6">

    <button
        onclick="openAddModal()"
        class="bg-purple-600 hover:bg-purple-700 hover:scale-105 transition duration-300 px-6 py-3 rounded-xl font-bold shadow-lg">

        ➕ Add Recipe

    </button>

</div>

    <div class="bg-slate-900 rounded-3xl overflow-hidden border border-slate-800 shadow-2xl">

        <table class="w-full">

            <thead class="bg-gradient-to-r from-purple-700 to-pink-700 text-white">

                <tr>

    <th class="p-4 text-left">ID</th>

    <th class="p-4 text-left">Menu</th>

    <th class="p-4 text-left">Ingredients</th>

    <th class="p-4 text-left">Instructions</th>

    <th class="p-4 text-center">Action</th>

</tr>

            </thead>

            <tbody id="recipeTable"></tbody>

        </table>

    </div>

</div>

<div
id="recipeModal"
class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">

<div class="bg-slate-900 w-[650px] rounded-2xl p-8 border border-slate-700">

<h2
id="modalTitle"
class="text-3xl font-bold mb-6">

Add Recipe

</h2>

<select
id="recipeMenu"
class="w-full p-3 rounded-xl bg-slate-800 mb-4">

<option>Loading Menu...</option>

</select>

<textarea
id="recipeIngredients"
placeholder="Ingredients"
class="w-full p-3 rounded-xl bg-slate-800 mb-4"></textarea>

<textarea
id="recipeInstructions"
placeholder="Instructions"
class="w-full p-3 rounded-xl bg-slate-800 mb-6"></textarea>

<div class="flex justify-end gap-3">

<button
onclick="closeModal()"
class="bg-gray-600 hover:bg-gray-700 px-6 py-2 rounded-xl">

Cancel

</button>

<button
id="saveBtn"
class="bg-purple-600 hover:bg-purple-700 px-6 py-2 rounded-xl">

Save

</button>

</div>

</div>

</div>

<script>

let editId = null;

loadRecipes();
loadMenus();

function loadRecipes(){

fetch('/project/recipes')
.then(res => res.json())
.then(data => {

    let rows = '';

    data.forEach(item => {

        rows += `
        <tr class="border-b border-slate-800 hover:bg-slate-800 transition duration-300">

            <td class="p-4">${item.id}</td>

            <td class="p-4">

<span class="bg-purple-600 px-4 py-2 rounded-full font-semibold">

${item.menu ? item.menu.name : '-'}

</span>

</td>

            <td class="p-4">

<div class="bg-slate-800 rounded-xl p-3 text-green-300">

🥬 ${item.ingredients}

</div>

</td>

            <td class="p-4">

<div class="bg-slate-800 rounded-xl p-3 text-yellow-300">

🔥 ${item.instructions}

</div>

</td>

<td class="p-4">

<div class="flex justify-center gap-2">

<button

onclick="editRecipe(

${item.id},

${item.menu_id},

'${item.ingredients ?? ''}',

'${item.instructions ?? ''}'

)"

class="bg-yellow-500 hover:bg-yellow-600 px-3 py-2 rounded-lg">

✏

</button>

<button

onclick="deleteRecipe(${item.id})"

class="bg-red-600 hover:bg-red-700 px-3 py-2 rounded-lg">

🗑

</button>

</div>

</td>

        </tr>
        `;
    });

    document.getElementById('recipeTable').innerHTML = rows;

});

}

function loadMenus(){

fetch('/project/menus')

.then(res => res.json())

.then(data => {

    let option = '';

    data.forEach(item => {

        option += `
<option value="${item.id}">
${item.name}
</option>
`;

    });

    document.getElementById('recipeMenu').innerHTML = option;

});

}

function openAddModal(){

    editId = null;

    document.getElementById('modalTitle').innerHTML = 'Add Recipe';

    document.getElementById('recipeMenu').selectedIndex = 0;

    document.getElementById('recipeIngredients').value = '';

    document.getElementById('recipeInstructions').value = '';

    document.getElementById('recipeModal').classList.remove('hidden');

}

function closeModal(){

    document.getElementById('recipeModal').classList.add('hidden');

}

function editRecipe(id, menu_id, ingredients, instructions){

    editId = id;

    document.getElementById('modalTitle').innerHTML = 'Edit Recipe';

    document.getElementById('recipeMenu').value = menu_id;

    document.getElementById('recipeIngredients').value = ingredients;

    document.getElementById('recipeInstructions').value = instructions;

    document.getElementById('recipeModal').classList.remove('hidden');

}

document.getElementById('saveBtn').onclick = function(){

    const data = {

        menu_id: document.getElementById('recipeMenu').value,

        ingredients: document.getElementById('recipeIngredients').value,

        instructions: document.getElementById('recipeInstructions').value

    };

    if(editId == null){

        fetch('/project/recipes',{

            method:'POST',

            headers:{
                'Content-Type':'application/json'
            },

            body:JSON.stringify(data)

        })

        .then(res=>res.json())

        .then(()=>{

            alert('✅ Recipe berhasil ditambahkan');

            closeModal();

            loadRecipes();

        });

    }else{

        fetch('/project/recipes/'+editId,{

            method:'PUT',

            headers:{
                'Content-Type':'application/json'
            },

            body:JSON.stringify(data)

        })

        .then(res=>res.json())

        .then(()=>{

            alert('✅ Recipe berhasil diupdate');

            closeModal();

            loadRecipes();

        });

    }

}

function deleteRecipe(id){

    if(!confirm('Yakin ingin menghapus recipe ini?')){

        return;

    }

    fetch('/project/recipes/'+id,{

        method:'DELETE'

    })

    .then(res=>res.json())

    .then(()=>{

        alert('✅ Recipe berhasil dihapus');

        loadRecipes();

    });

}


</script>

</body>
</html>