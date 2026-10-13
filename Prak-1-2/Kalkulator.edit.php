<?php
$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $operator = $_POST['operator'] ?? '+';

    switch ($operator) {
        case '+' :
            $hasil = $a + $b;
            break;
        case '-' :
            $hasil = $a - $b;
            break;
        case '*' :
            $hasil = $a * $b;
            break;
        case '/' :
            if ($b == 0) {
                $pesan = 'Error: Tidak dapat membagi dengan nol!'; 
            } else {
                $hasil = $a / $b;
            }
            break;
        default:
            $pesan = 'Operator tidak valid!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Web</title>
    <!-- Manggil Tailwind CSS biar stylingnya langsung kece -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen">
    
    <!-- Card Container -->
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-sm border border-slate-100">
        <h1 class="text-3xl font-bold text-center text-slate-800 mb-6">Kalkulator</h1>
        
        <form method="post" class="flex flex-col gap-5">
            <!-- Input Angka 1 -->
            <div>
                <label class="block text-sm font-semibold text-slate-600 mb-1">Angka Pertama</label>
                <input type="number" step="any" name="a" required 
                       class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                       value="<?= isset($_POST['a']) ? htmlspecialchars($_POST['a']) : '' ?>" placeholder="Masukkan angka...">
            </div>
            
            <!-- Input Operator -->
            <div>
                <label class="block text-sm font-semibold text-slate-600 mb-1">Operasi</label>
                <select name="operator" 
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white cursor-pointer transition">
                    <option value="+" <?= (isset($_POST['operator']) && $_POST['operator'] === '+') ? 'selected' : '' ?>>+ (Tambah)</option>
                    <option value="-" <?= (isset($_POST['operator']) && $_POST['operator'] === '-') ? 'selected' : '' ?>>- (Kurang)</option>
                    <option value="*" <?= (isset($_POST['operator']) && $_POST['operator'] === '*') ? 'selected' : '' ?>>× (Kali)</option>
                    <option value="/" <?= (isset($_POST['operator']) && $_POST['operator'] === '/') ? 'selected' : '' ?>>÷ (Bagi)</option>
                </select>
            </div>
            
            <!-- Input Angka 2 -->
            <div>
                <label class="block text-sm font-semibold text-slate-600 mb-1">Angka Kedua</label>
                <input type="number" step="any" name="b" required 
                       class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                       value="<?= isset($_POST['b']) ? htmlspecialchars($_POST['b']) : '' ?>" placeholder="Masukkan angka...">
            </div>
            
            <!-- Tombol Hitung -->
            <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg shadow-md hover:shadow-lg transition duration-200 mt-2">
                Hitung Sekarang
            </button>
        </form>
        
        <!-- Notifikasi Error -->
        <?php if ($pesan): ?>
            <div class="mt-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg shadow-sm">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm text-red-700 font-medium"><?= htmlspecialchars($pesan) ?></p>
                </div>
            </div>
            
        <!-- Notifikasi Sukses / Hasil -->
        <?php elseif ($hasil !== null): ?>
            <div class="mt-6 bg-emerald-50 border border-emerald-200 rounded-xl p-5 text-center shadow-sm">
                <p class="text-sm text-emerald-600 font-semibold mb-1 uppercase tracking-wide">Hasil Perhitungan</p>
                <p class="text-4xl font-black text-emerald-700"><?= htmlspecialchars((string)$hasil)?></p>
            </div>
        <?php endif; ?>
        
    </div>

</body>
</html>