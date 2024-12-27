<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-[#EEA628] text-black shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo or Greeting -->
            <a class="text-2xl font-semibold" href="#">Hello, {{ Auth::user()->name }}</a>

            <!-- Hamburger Button (for mobile) -->
            <button class="lg:hidden text-black focus:outline-none" id="navbarToggler">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Navbar Links (Desktop) -->
            <div class="hidden lg:flex space-x-4">
                <a href="/admin/profil" class="text-lg font-medium py-2 px-4 border border-transparent rounded-md hover:bg-gray-800 hover:text-white transition duration-300">Data Profil</a>
                <a href="#" class="text-lg font-medium py-2 px-4 border border-transparent rounded-md hover:bg-gray-800 hover:text-white transition duration-300">Data Berita</a>
                <a href="#" class="text-lg font-medium py-2 px-4 border border-transparent rounded-md hover:bg-gray-800 hover:text-white transition duration-300">Data Pengumuman</a>
                <a href="#" class="text-lg font-medium py-2 px-4 border border-transparent rounded-md hover:bg-gray-800 hover:text-white transition duration-300">Data Galeri</a>
                <a href="#" class="text-lg font-medium py-2 px-4 border border-transparent rounded-md hover:bg-gray-800 hover:text-white transition duration-300">Data Kontak</a>
                <a href="/logout" class="text-lg font-medium py-2 px-4 border border-transparent rounded-md hover:bg-gray-800 hover:text-white transition duration-300">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welcome to the Dashboard</h2>
            <p class="text-lg text-gray-700">Here you can manage your profile, view data, and more.</p>
        </div>
    </div>

    <!-- Tailwind JS CDN (for Tailwind JIT functionality) -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
