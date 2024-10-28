<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Add New Cine</h1>
    <form action="/storecine" method="POST">
        <div class="mb-4">
            <label for="localidad" class="block text-sm font-medium text-gray-700">Localidad</label>
            <input type="text" name="localidad" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter Cine title">
        </div>

        <div class="mb-4">
            <label for="clientes" class="block text-sm font-medium text-gray-700">Numero clientes</label>
            <input type="number" name="clientes" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter director's name">
        </div>

        <div class="mb-4">
            <label for="peliculas_mostradas" class="block text-sm font-medium text-gray-700">Peliculas mostradas</label>
            <input type="number" name="peliculas_mostradas" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter release year">
        </div>
        <div class="mb-4">
            <label for="pelicula_id" class="block text-sm font-medium text-gray-700">Pelicula mas vista (id de pelicula creada</label>
            <input type="number" name="pelicula_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter id pelicula">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Cine</button>
    </form>

</div>
</body>
</html>