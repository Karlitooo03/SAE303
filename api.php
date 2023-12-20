<?php
$apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=Paris&appid=7fdb48df5993f3acec244d1c2652170d";

$response = file_get_contents($apiUrl);

if ($response === false) {
    die('Erreur lors de la requête vers l\'API.');
}

// Convertir  JSON 
$data = json_decode($response, true);

// Afficher les données 
echo  $data['name'] . '<br>';


//Convertir en celcius
$celcius =  number_format($data['main']['temp'] - 273.15, 0);
echo 'Température: ' . $celcius . ' °<br>';
//echo 'Description: ' . $data['weather'][0]['description'] . '<br>';

// Afficher l'image qui correspond au temps
$iconCode = $data['weather'][0]['icon'];
$apiIcon = "http://openweathermap.org/img/wn/" . $iconCode . "@2x.png";
echo '<img src="' . $apiIcon . '" alt="Weather Icon"><br>';
?>