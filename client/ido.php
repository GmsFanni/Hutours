<?php
    // API key
    $apiKey = "0ab21cae8857932dd852d8f362195f75";
    // City name
    $cityName = "London";
    // API URL
    $url = "http://api.openweathermap.org/data/2.5/weather?q=".$cityName."&appid=".$apiKey;
    // Initialize cURL
    $ch = curl_init();
    // Set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    // Execute request
    $result=curl_exec($ch);
    // Close connection
    curl_close($ch);
    // Decode JSON data
    $data = json_decode($result,true);

    // Print current weather data
    echo "Város: ".$data['name']."<br>";
    echo "Hőmérséklet: ".$data['main']['temp']."&deg;C<br>";
    echo "Páratartalom: ".$data['main']['humidity']."%<br>";
    echo "Szél sebesség: ".$data['wind']['speed']." m/s<br>";
    //echo "<img src='https://openweathermap.org/img/wn/".$temperature_current_weather_icon. "@2x.png' />";
?>
