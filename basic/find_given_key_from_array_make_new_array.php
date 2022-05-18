<?php

$arrays = [
    [
        "Saykat" => 100,
        "Rahed" => 50,
    ],
    [
        "Based" => 30,
        "Dakin" => 20,
    ],
    [
        "Saykat" => 300,
        "Belal" => 500,
    ],
];

$saykot = [];
$findKey = "Saykat";

foreach ($arrays as $array) {

    if(array_key_exists($findKey, $array)){
        array_push($saykot, [$findKey => $array[$findKey]]);
    }
}

echo "<pre>";
print_r($saykot);
