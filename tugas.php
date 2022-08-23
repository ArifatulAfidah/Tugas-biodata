<?php
$nilai = 88;

if ($nilai >90) {
    $predikat = "A+";
} elseif($nilai > 80){
    $predikat = "A";
} elseif($nilai > 75){
    $predikat = "B+";
} elseif($nilai > 65){
    $prdikat = "B";
} elseif($nilai > 50){
    $predikat = "C+";
} elseif($nilai > 45){
    $prdikat = "C";
} elseif($nilai > 40){
    $predikat = "D";
} elseif($nilai > 30){
    $predikat = "E";
}
 echo "Nilai Anda: $nilai<br>";
 echo "Predikat: $predikat";

 ?>