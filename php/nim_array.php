<?php

$nim = readline("Masukkan NIM: ");

$digit = [];
for ($i = 0; $i < strlen($nim); $i++) {
    $digit[$i] = intval($nim[$i]);
}

    $total = 0;
    for ($i = 0; $i < count($digit); $i++) {
        $total += $digit[$i];
}

    $maks = $digit[0];
    for ($i = 0; $i < count($digit); $i++) {
        if ($digit[$i] > $maks) {
            $maks = $digit[$i];
        }
    }

    $minim = $digit[0];
    for ($i = 0; $i < count($digit); $i++){
        if ($digit[$i] < $minim) {
            $minim = $digit[$i];
        }
    }

    $rata = $total / count($digit);

    $rev = [];
    for ($i = count($digit) - 1; $i >= 0; $i--) {
        $rev[] = $digit[$i];
    }

echo "Digit        : [ " . implode(", ", $digit) . " ]\n";
echo "Total        : $total\n";
echo "Maksimum     : $maks\n";
echo "Minimum      : $minim\n";
echo "Rata-rata    : $rata\n";
echo "Reverse array: [ " . implode(", ", $rev) . " ]\n";

?>