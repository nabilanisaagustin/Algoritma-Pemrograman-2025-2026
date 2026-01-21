<?php
echo "Masukkan hari: ";
$hari = trim(fgets(STDIN));

echo "Masukkan jam: ";
$jam = trim(fgets(STDIN));

switch ($hari) {
    case "Senin":
        switch ($jam) {
            case "08.20-11.20":
                echo "Hari Senin jam 08.20-11.20 matkul Algoritma & Pemrograman";
                break;

            case "13.00-15.00":
                echo "Hari Senin jam 13.00-15.00 matkul Aplikasi Komputer";
                break;

            default:
                echo "Jam kuliah tidak ditemukan";
        }
        break;

    default:
        echo "Hari tidak ditemukan";
}
?>
