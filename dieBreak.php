<?php
//die() komutu cagirildiginda kodumuzun devami calismaz
//break; komutu ise cagirildiginda o noktada durur

$ages = [120,23,12,33,21,44,110];

foreach ($ages as $value){
    if($value>=100){
        echo "ur very old";
        die();
    }elseif ($value<=30){
        echo "ur young";
        break;
    }
}

echo "if ur see this echo working break";