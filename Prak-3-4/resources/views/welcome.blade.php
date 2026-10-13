<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | WebFikri</title>
    <!-- Asumsi tailwind lu udah jalan, atau lu bisa pake @vite('resources/css/app.css') -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="/" class="text-2xl font-black text-blue-600 tracking-tighter">WebGue.</a>
                <div class="flex space-x-6">
                    <a href="/" class="text-blue-600 font-semibold">Welcome</a>
                    <a href="/kontak" class="text-slate-500 hover:text-blue-600 font-medium transition">Kontak</a>
                    <a href="/about" class="text-slate-500 hover:text-blue-600 font-medium transition">About</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Welcome -->
    <main class="flex-grow flex items-center justify-center p-6">
        <div class="text-center max-w-3xl">
            <span class="px-4 py-1.5 rounded-full bg-blue-100 text-blue-700 font-semibold text-sm tracking-wide mb-6 inline-block">🚀 Laravel & Tailwind</span>
            <h1 class="text-5xl font-extrabold tracking-tight text-slate-900 mb-6">
                Selamat Datang di <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Website Kami</span>
            </h1>
            <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                Ini adalah halaman utama dari project web modern. Dibuat dengan cinta menggunakan Laravel dan sentuhan desain manis dari Tailwind CSS.
            </p>
            <a href="/about" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                Mulai Jelajahi
            </a>
        </div>
    </main>

</body>
</html>