<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}


$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br>Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer.";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <=$jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br><br>Total skor ujian adalah: $totalSkor <br><br>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nilai</th><th>Keterangan</th></tr>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    echo "<tr>";
    if ($nilai < 60) {
        echo "<td>$nilai</td><td>Tidak lulus</td>";
        continue;
    }
    echo "<td>$nilai</td><td>Lulus</td>";
    echo "</tr>";
}
echo "</table>";

?>