<?php

$nama = "Haekal Figo Anwar";
$wa = "087874975084";
$alamat = "Jl.Duri Selatan";
$tipekamar = "Deluxe";
$harga = "200000";
$menginap = 5;

$diskon = 0;

if ($tipekamar == "Deluxe" && $menginap > 4) {
    $diskon = 0.05;
} elseif ($tipekamar == "Superior" && $menginap > 4) {
    $diskon = 0.35;
} elseif ($tipekamar == "Premium" && $menginap > 4) {
    $diskon = 0.25;
}

$totalharga = $harga * $menginap * (1 - $diskon);

$status = "Checkin";

echo "<h1>==== Program Reservasi Hotel ===</h1><br />";
echo "Nama Pemesan: $nama <br/>";
echo "Nomor Whatsapp: $wa <br/>";
echo "Alamat: $alamat <br/>";
echo "Tipe Kamar: $tipekamar <br/>";
echo "Harga Per Malam: Rp. " . number_format($harga, 0, ",", ".") . "\n <br/>";
echo "Lama Menginap: $menginap hari <br/>";
echo "Diskon: " . ($diskon * 100) . "% <br/>";
echo "Total Harga: Rp. " . number_format($totalharga, 0, ",", ".") . "\n <br/>";
echo "Status: ";

if ($status == "Checkin") {
    echo "<span style='color : green;'>Checkin</span>";
} elseif ($status == "checkin") {
    echo "<span style='color : yellow;'>Waiting</span>";
} elseif ($status == "checkout") {
    echo "<span style='color : red;'>Checkout</span>";
}


?>