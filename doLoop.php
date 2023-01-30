<?php
$users = ["john","jack","david","kimi"];

$i=0;
do{
    echo $users[$i]."\n";
    $i++;
}
while($i<count($users));