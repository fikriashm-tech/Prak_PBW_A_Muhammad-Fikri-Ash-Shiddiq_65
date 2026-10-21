<?php
function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat CIHUYYYY 🔥';
    if ($ipk >= 3.00) return 'Memuaskan 👍';
    return 'Perlu Peningkatan 📈';
}

// Typo kurang kutip di NIM udah diperbaiki
$mahasiswa = [
    'nim' => '4524210065',
    'nama' => 'M.Fikri Ash Shiddiq',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 9.9
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen p-4">

    <!-- Card Profil -->
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md overflow-hidden border border-slate-200">
        
        <!-- Header / Banner -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 h-32 flex items-center justify-center relative">
            <!-- Dekorasi Avatar / Inisial -->
            <div class="absolute -bottom-12 w-24 h-24 bg-white rounded-full p-1 shadow-lg flex items-center justify-center">
                <div class="w-full h-full bg-slate-800 rounded-full flex items-center justify-center text-3xl font-black text-white">
                    <?= strtoupper(substr($mahasiswa['nama'], 2, 1)) ?>
                </div>
            </div>
        </div>

        <div class="pt-16 pb-8 px-8 text-center">
            <h1 class="text-2xl font-bold text-slate-800 mb-1"><?= htmlspecialchars($mahasiswa['nama']) ?></h1>
            <p class="text-sm font-medium text-slate-500 mb-6 uppercase tracking-widest">Biodata Gue</p>

            <!-- Tabel Data -->
            <div class="bg-slate-50 rounded-xl p-4 mb-6 shadow-inner border border-slate-100">
                <ul class="space-y-3 text-left">
                    <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                        <li class="flex justify-between items-center border-b border-slate-200 pb-2 last:border-0 last:pb-0">
                            <span class="text-sm font-semibold text-slate-500 uppercase"><?= htmlspecialchars($kunci) ?></span>
                            <span class="text-sm font-bold text-slate-800 text-right">
                                <?= htmlspecialchars((string)$nilai) ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Predikat Kelulusan Badge -->
            <div class="inline-flex flex-col items-center">
                <span class="text-xs font-bold text-slate-400 uppercase mb-2">Predikat / Status</span>
                <span class="bg-emerald-100 text-emerald-700 font-bold px-5 py-2 rounded-full border border-emerald-200 shadow-sm text-sm">
                    <?= statusKelulusan($mahasiswa['ipk']) ?>
                </span>
            </div>
        </div>
    </div>

</body>
</html>