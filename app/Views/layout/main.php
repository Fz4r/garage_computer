<!-- Tamplate Header, Main, dan footer section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Computer</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <nav class="bg-white shadow-sm p-4 flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-blue-600">Garage Computer</a>
        <div class="space-x-4">
            <a href="/" class="hover:text-blue-500">Home</a>
            <a href="/admin" class="hover:text-blue-500">Admin</a>
            <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Login</a>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="text-center p-10 text-gray-400 text-sm">
        &copy; <?= date('Y') ?> Garage Computer - Project Sampingan IT
    </footer>
</body>
</html>