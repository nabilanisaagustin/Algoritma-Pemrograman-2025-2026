<?php

do {
    echo "Masukkan nama : ";
    $nama = trim(fgets(STDIN));

    echo "Apakah nama sudah benar? (true/false) : ";
    $confirm = strtolower(trim(fgets(STDIN)));

} while ($confirm !== "true");

echo "Masukkan NIM tanpa huruf : ";
$nim = trim(fgets(STDIN));
$saldo = (int)$nim;

echo "\n====  DATA NASABAH  ====\n";
echo "Nama : $nama\n";
echo "Saldo Awal : Rp " . number_format($saldo, 0, ',', '.') . "\n";


while (true) {
    echo "\n====  MENU ATM  ====\n";
    echo "1. Cek saldo\n";
    echo "2. Tarik Tunai\n";
    echo "3. Setor Tunai\n";
    echo "4. Transfer\n";
    echo "5. Keluar\n";
    echo "Pilih Menu : ";
    $menu = (int)trim(fgets(STDIN));

    switch ($menu) {

        case 1:
            echo "Saldo kamu: Rp " . number_format($saldo, 0, ',', '.') . "\n";
            break;

        case 2:
            echo "Jumlah tarik : ";
            $tarik = (int)trim(fgets(STDIN));
            if ($tarik <= $saldo) {
                $saldo -= $tarik;
                echo "Berhasil tarik! Sisa saldo: Rp " . number_format($saldo, 0, ',', '.') . "\n";
            } else {
                echo "Saldo tidak cukup!\n";
            }
            break;

        case 3:
            echo "Jumlah setor : ";
            $setor = (int)trim(fgets(STDIN));
            $saldo += $setor;
            echo "Saldo sekarang: Rp " . number_format($saldo, 0, ',', '.') . "\n";
            break;

        case 4:
            echo "Jumlah transfer : ";
            $tf = (int)trim(fgets(STDIN));
            if ($tf <= $saldo) {
                $saldo -= $tf;
                echo "Transfer berhasil! Sisa saldo: Rp " . number_format($saldo, 0, ',', '.') . "\n";
            } else {
                echo "Saldo tidak cukup!\n";
            }
            break;

        case 5:
            echo "Terimakasih sudah menggunakan ATM\n";
            exit;

        default:
            echo "Menu tidak tersedia!\n";
    }
}
?>