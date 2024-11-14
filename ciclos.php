<?php
//FOR
for ($i = 0; $i < 10; $i = $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i;
}

//FOREACH
$names = ["Francisco", "Roberto", "Juan"];
$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];
foreach ($beer as $k => $v) {
    echo $k . " " . $v . ";";
}

//WHILE
$i = 0;
while($i < 10){
    echo $i;
    $i++;
}

//DO WHILE
$i = 1;
do{
    echo "entra $i <br>";
}while($i < 10);


