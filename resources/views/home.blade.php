<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cines</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
<!-- Header -->
<?php require "../resources/views/layout/nav.blade.php"; ?>

<header class="bg-blue-600 text-white p-4 text-center">
    <h1 class="text-3xl font-bold">Cines en España</h1>
    <p class="mt-2">Encuentra los mejores cines y disfruta de una experiencia inolvidable</p>
</header>

<!-- Main Content -->
<main class="container mx-auto mt-8 p-4">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Listado de Cines</h2>

    <!-- Cine Card Grid -->
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <!-- Cine Card -->
        <?php foreach ($cines as $cines): ?>
            <div class="bg-white rounded-lg shadow-md p-4">
                <h3 class="text-xl font-bold text-gray-700"><?= htmlspecialchars($cines['localidad']) ?></h3>
                <p class="text-gray-600">Clientes: <?= htmlspecialchars($cines['clientes']) ?></p>
                <p class="text-gray-600">Películas mostradas: <?= htmlspecialchars($cines['peliculas_mostradas']) ?></p>
            </div>
        <?php endforeach; ?>

                <!-- Cine Card -->

    </div>

</main>

<!-- Footer -->
<?php require "../resources/views/layout/footer.blade.php"; ?>

</body>
</html>