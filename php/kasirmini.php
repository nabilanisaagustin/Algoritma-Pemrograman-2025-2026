<?php
echo "Nama Barang : ";
$nama_barang = trim(fgets(STDIN));

echo "Harga Barang (Rp) : ";
$harga_barang = floatval(trim(fgets(STDIN)));

echo "Jumlah Barang : ";
$jumlah_barang = intval(trim(fgets(STDIN)));

$total = $harga_barang * $jumlah_barang;

if ($total > 17300) {
    $diskon = $total * 0.03;
} else {
    $diskon = 0;
}

$total_bayar = $total - $diskon;

echo "\n====  STRUK PEMBELIAN  ====\n";
echo "Nama Barang       : $nama_barang\n";
echo "Harga Satuan      : $harga_barang\n";
echo "Jumlah Beli       : $jumlah_barang\n";
echo "Total Harga       : $total\n";
echo "Diskon            : $diskon\n";
echo "Total Bayar       : $total_bayar\n";
echo "============================\n";
?>