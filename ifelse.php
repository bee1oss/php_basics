<?php
$num = 90;
$res = " ";
//normal de karsilastirma operatoru == dir bir de 3 tane === olani var, bu ise hem esit olup olmadigini
//kontrol edir hemde veri tiplerinin ayni olup olmadigini kontrol eder
if ($num > 150){
    $res = "Success";

}elseif($num<90){
    $res = "Super Sad";
}else{
    $res = "Sad";
}

echo $res;