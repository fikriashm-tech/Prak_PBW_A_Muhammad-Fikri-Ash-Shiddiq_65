<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | WebFikri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="/" class="text-2xl font-black text-blue-600 tracking-tighter">WebGue.</a>
                <div class="flex space-x-6">
                    <a href="/" class="text-slate-500 hover:text-blue-600 font-medium transition">Welcome</a>
                    <a href="/kontak" class="text-slate-500 hover:text-blue-600 font-medium transition">Kontak</a>
                    <a href="/about" class="text-blue-600 font-semibold">About</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten About -->
    <main class="flex-grow max-w-4xl mx-auto w-full p-6 mt-10">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col md:flex-row">
            
            <!-- Bagian Kiri (Visual) -->
            <div class="bg-slate-900 text-white p-8 md:w-2/5 flex flex-col justify-center items-center text-center">
                <div class="w-32 h-32 bg-gradient-to-tr from-blue-500 to-cyan-400 rounded-full flex items-center justify-center text-5xl font-black shadow-lg mb-6">
                    MF
                </div>
                <h2 class="text-2xl font-bold mb-1">M. Fikri Ash Shiddiq</h2>
                <p class="text-blue-300 font-medium text-sm tracking-widest uppercase">Web Developer</p>
            </div>

            <!-- Bagian Kanan (Teks Info) -->
            <div class="p-8 md:w-3/5">
                <h3 class="text-xl font-bold text-slate-800 border-b border-slate-100 pb-3 mb-4">Tentang Saya</h3>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Halo! Saya adalah mahasiswa S1 Teknik Informatika di Universitas Pancasila. Saya memiliki ketertarikan yang kuat dalam pengembangan aplikasi web dan terus mengeksplorasi teknologi modern seperti Laravel dan Tailwind CSS untuk menciptakan antarmuka yang menarik dan fungsional.
                </p>
                
        </div>
    </main>

</body>
</html>