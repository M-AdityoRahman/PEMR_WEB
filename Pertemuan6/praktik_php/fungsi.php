<?php

function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun"

/*function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya " .$nama. "<br/>"; 
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi
perkenalan($saya); */
?>