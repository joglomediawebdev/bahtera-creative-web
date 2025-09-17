<!-- resources/views/layouts/navbar.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- CDN Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="w-full bg-gray-300 flex items-center justify-between px-10" style="height:70px;">
        <!-- Menu -->
        <ul class="flex space-x-10 text-black font-medium">
            <li><a href="#" class="hover:text-green-700">Home</a></li>
            <li><a href="#" class="hover:text-green-700">Profile</a></li>
            <li><a href="#" class="hover:text-green-700">Portofolio</a></li>
            <li><a href="#" class="hover:text-green-700">Layanan</a></li>
            <li><a href="#" class="hover:text-green-700">Kontak</a></li>
        </ul>

        <!-- Logo -->
        <div class="h-full flex items-center py-2">
            <img src="img/logo-bahtera.png" alt="Logo" class="h-full object-contain">
        </div>
    </nav>
</body>
</html>
