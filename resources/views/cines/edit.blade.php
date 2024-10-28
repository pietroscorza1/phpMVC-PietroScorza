<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cines</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">Edit cine</h1>
        <form action="/updateCine" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($cine->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nombre localidad</label>
                <input type="text" name="localidad" value="<?= htmlspecialchars($cine->localidad) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="director" class="block text-gray-700">Numero de clientes</label>
                <input type="number" name="clientes" value="<?= htmlspecialchars($cine->clientes) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="year" class="block text-gray-700">Peliculas mostradas</label>
                <input type="number" name="peliculas_mostradas" value="<?= htmlspecialchars($cine->peliculas_mostradas) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="year" class="block text-gray-700">Pelicula mas vista</label>
                <input type="number" name="pelicula_id" value="<?= htmlspecialchars($cine->pelicula_id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
        </form>
        <a href="/cines" class="text-gray-500 hover:underline mt-4 block">Return</a>
    </div>
</body>
</html>