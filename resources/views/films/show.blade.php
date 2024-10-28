<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Película</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<!-- Header -->
<header class="bg-blue-600 text-white p-4 text-center">
    <h1 class="text-3xl font-bold">Detalles de la Película</h1>
</header>

<!-- Main Content -->
<main class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg max-w-lg">
    <!-- Nombre de la Película -->
    <h2 class="text-4xl font-bold text-gray-800 mb-4"><?= htmlspecialchars($film->nombre) ?></h2>

    <!-- Director -->
    <div class="mb-4">
        <h3 class="text-lg font-semibold text-gray-700">Director:</h3>
        <p class="text-gray-600"><?= htmlspecialchars($film->director) ?></p>
    </div>

    <!-- Año -->
    <div class="mb-4">
        <h3 class="text-lg font-semibold text-gray-700">Año de estreno:</h3>
        <p class="text-gray-600"><?= htmlspecialchars($film->year) ?></p>
    </div>

    <!-- Sinopsis (Opcional) -->
    <div class="mb-6">
        <h3 class="text-lg font-semibold text-gray-700">Sinopsis:</h3>
        <p class="text-gray-600"><?= htmlspecialchars($film->sinopsis) ?></p>
    </div>

    <!-- Botón de volver -->
    <div class="text-center">
        <a href="/pelicules" class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition duration-300">
            Volver a la lista
        </a>
    </div>
</main>

<!-- Footer -->
<footer class="bg-blue-600 text-white text-center p-4 mt-8">
    <p>&copy; 2024 Cines España. Todos los derechos reservados.</p>
</footer>

</body>
</html>
