<?php
// Az API kulcsodat ide írd be
$apiKey = "0ab21cae8857932dd852d8f362195f75";
// A város azonosítóját ide írd be
$cityId = "3050434";
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

// Meghatározzuk az aktuális időt
$currentTime = time();
?>

<!doctype html>
<html>
<head>
<title>Időjárás</title>
</head>
<body>
    <div class="report-container">
        <h2><?php echo $data->name; ?> időjárása</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("Y F jS",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C <span class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
        </div>
        <div class="time">
            <div>Páratartalom: <?php echo $data->main->humidity; ?> %</div>
            <div>Szél: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
    
    
</body>
</html>

