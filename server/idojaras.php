<?php
session_start();
require_once "configDb.php";
extract($_GET);

// Az API kulcsodat ide írd be
$apiKey = "0ab21cae8857932dd852d8f362195f75";
// A város azonosítóját ide írd be
$cityId = $cityId;
// Az API kérés URL-je
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

// Létrehozunk egy cURL objektumot
$ch = curl_init();

// Beállítjuk a cURL opciókat
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Elküldjük a kérést és megkapjuk a választ
$response = curl_exec($ch);

// Lezárjuk a cURL objektumot
curl_close($ch);

// Feldolgozzuk a JSON formátumú választ
$data = json_decode($response);
$name=$data->name;
$descr=ucwords($data->weather[0]->description);
$imgUrl="https://openweathermap.org/img/w/".$data->weather[0]->icon.".png";
$tempMax=$data->main->temp_max;
$tempMin=$data->main->temp_min;
$humidity=$data->main->humidity;
$wind=$data->wind->speed;


// Meghatározzuk az aktuális időt
$currentTime = time();

echo json_encode(["name"=>$name,"descr"=>$descr,"imgUrl"=>$imgUrl,"tempMax"=>$tempMax,"tempMin"=>$tempMin,"humidity"=>$humidity,"wind"=>$wind]);
?>