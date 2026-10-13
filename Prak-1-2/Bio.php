<?php
function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat CIHUYYYY';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

$mahasiswa = [
    'nim' => '4524211111',
    'nama' => 'GAMBIIIWWW',
    'prodi' => 'Teknik Informatika',
    'semester' => 11,
    'ipk' => 4.1
];
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata</title>
</head>

<body>
    <h1>Biodaata GUE</h1>

    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li><?= ucfirst($kunci) ?>: <?= htmlspecialchars((string)$nilai) ?></li>
        <?php endforeach; ?>
    </ul>

    <p>Predikat: <?= statusKelulusan($mahasiswa['ipk']) ?></p>
</body>

</html>