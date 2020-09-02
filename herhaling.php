<?php

//opdracht 1

$getal= 10;
var_dump(is_int($getal));

$klas =["Piet Van Dijk" , "Rembrant van Rijn" , "Vincent van Gogh" , "Floris van Dyck" ];

echo var_dump($klas);

  for($i=0; $i <= 3; $i++){
  }

  //opdracht 2
  $klas =["Piet Van Dijk" , "Rembrant van Rijn" , "Vincent van Gogh" , "Floris van Dyck" ];
    for($i=0; $i <sizeof($klas); $i++){
    echo $klas[$i]. PHP_EOL;}

//opdracht 3
  $hoeveelheid_activiteiten =readline("Hoeveel activiteiten wil je toevoegen aan je bucket list?");
  $bucket_list = [];

  for($i=0;$i<$hoeveelheid_activiteiten; $i++){
    $activity[$i] = array_push($bucket_list,readline("Welke activiteiten wil je toevoegen?")).PHP_EOL;

  }

  var_dump($bucket_list);

  foreach ($bucket_list as $value) {
    echo $value.PHP_EOL;
  }




?>
