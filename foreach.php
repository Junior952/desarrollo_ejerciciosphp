<?php
$names = ["José", "Juan", "Pedro"];
$beer  = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania",
];
foreach($beer as $k => $v){
    echo $k." ".$v.";" . "<br>";
}