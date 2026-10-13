<?php
function statuskelulusan (float $ipk): string{
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';

}
$mahasiswa = [
    'npm' => '4524210096',
    'nama' => 'Sarah Syafitri Hilmi',
    'prodi' => 'Teknik Informatika',
    'semester' => 1,
    'ipk' => 3.85
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $kunci=>$nilai):?>

        <li>
            <?= ucfirst($kunci)?>:<?=htmlspecialchars((string)$nilai) ?>
        </li>
        <?php endforeach;?>
    </ul>
    <p>Predikat: <?= statuskelulusan($mahasiswa['ipk'])?></p>
</body>
</html>