<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cines</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<?php use App\Models\Film;

require "../resources/views/layout/nav.blade.php"; ?>

<div class="min-h-screen max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Cines España</h1>
    <a href="/createcine" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Film</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Localitat</th>
            <th class="py-3 px-6 text-left">Clientes</th>
            <th class="py-3 px-6 text-left">Peliculas Mostradas</th>
            <th class="py-3 px-6 text-left">Id de pelicula mas vista</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($cines)): ?>
        <tr>
            <td colspan="5" class="py-3 px-6 text-center">No hi ha cines disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($cines as $cine): ?>
            <?php
            $pelicula = Film::find($cine['pelicula_id']);
            $nombrePelicula = $pelicula ? $pelicula->nombre : 'N/A';
            ?>

        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?= $cine['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($cine['localidad']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($cine['clientes']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($cine['peliculas_mostradas']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($nombrePelicula) ?></td>

            <td class="py-3 px-6 text-center gap-4 flex flex-1">
                <a href="/edit-cine/<?= $cine['id'] ?>" class="font-bold text-blue-500 hover:text-blue-700">Edit</a>
                <a href="/delete-cine/<?= $cine['id'] ?>" class="font-bold text-red-500 hover:text-red-700 ">Delete</a>
                <a href="/show-cine/<?= $cine['id'] ?>" class="font-bold text-green hover:text-green-700 ">Show</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>


        </tbody>
    </table>
</div>
<?php require "../resources/views/layout/footer.blade.php"; ?>

</body>
</html>