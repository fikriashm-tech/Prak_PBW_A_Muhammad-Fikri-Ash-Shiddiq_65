<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | WebFikri</title>
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
                    <a href="/kontak" class="text-blue-600 font-semibold">Kontak</a>
                    <a href="/about" class="text-slate-500 hover:text-blue-600 font-medium transition">About</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Kontak (Ala Google Contacts) -->
    <main class="flex-grow max-w-4xl mx-auto w-full p-6 mt-8">
        <h2 class="text-2xl font-bold text-slate-800 mb-6">Daftar Kontak</h2>
        
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
            <ul class="divide-y divide-slate-100">
                
                <!-- Kontak 1 -->
                <li class="p-4 hover:bg-slate-50 transition cursor-pointer flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center text-lg font-bold">A</div>
                    <div class="flex-1">
                        <h3 class="text-slate-800 font-semibold">Andi Setiawan</h3>
                        <p class="text-slate-500 text-sm">andi.setiawan@example.com</p>
                    </div>
                    <div class="text-slate-400 text-sm hidden md:block">0812-3456-7890</div>
                </li>

                <!-- Kontak 2 -->
                <li class="p-4 hover:bg-slate-50 transition cursor-pointer flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-lg font-bold">B</div>
                    <div class="flex-1">
                        <h3 class="text-slate-800 font-semibold">Bintang Pratama</h3>
                        <p class="text-slate-500 text-sm">bintang.p@example.com</p>
                    </div>
                    <div class="text-slate-400 text-sm hidden md:block">0857-9876-5432</div>
                </li>

                <!-- Kontak 3 -->
                <li class="p-4 hover:bg-slate-50 transition cursor-pointer flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-lg font-bold">C</div>
                    <div class="flex-1">
                        <h3 class="text-slate-800 font-semibold">Citra Kirana</h3>
                        <p class="text-slate-500 text-sm">citra.kirana@example.com</p>
                    </div>
                    <div class="text-slate-400 text-sm hidden md:block">0813-1122-3344</div>
                </li>

            </ul>
        </div>
    </main>

</body>
</html>