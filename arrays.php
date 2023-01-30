<?php
$arr = [
    'first' => 10,
    'second' => 20,
    'asdasd',
    false,
    null,[
        'first' => 10,
        'second' => 20
    ]
];
$arr['last']= 50;


var_dump($arr);