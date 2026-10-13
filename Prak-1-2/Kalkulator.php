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
                // Beri isi pada pesan error, jangan dikosongin
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
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post">
        <!-- Typo reqired diubah jadi required -->
        <input type="number" step="any" name="a" required>
        
        <!-- Nilai option diperjelas dengan atribut value -->
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        
        <input type="number" step="any" name="b" required>
        <button type="submit">Hitung</button>
    </form>
    
    <?php if ($pesan): ?>
    <!-- Kurang tanda $ pada variabel pesan udah ditambahin -->
    <p style="color: red;"><?= htmlspecialchars($pesan) ?></p>
    <?php elseif ($hasil !== null): ?>
    <p>Hasil : <?= htmlspecialchars((string)$hasil)?></p>
    <?php endif; ?>
</body>
</html>