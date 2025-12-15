<?php 

function perkenalan($nama, $salam="Assalamualaikum"){ 
echo $salam.", "; 
echo "Perkenalkan, nama saya ".$nama."<br/>"; 
echo "Senang berkenalan dengan anda<br/>"; 
} 
 
perkenalan("Nabila", "Hi"); 
echo "<hr>"; 
$saya = "Lala"; 
$ucapanSalam = "Selamat pagi"; 

perkenalan($saya); 
?> 