<!DOCTYPE html>
<html>
<head>
    <title>Временска апликација</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .weather-info {
            margin-bottom: 20px;
        }
        .weather-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .weather-info p {
            font-size: 18px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    // Поставување на API клуч и координати за локацијата
    $api_key = 'e875cae4-0baf-11ef-a7bb-0242ac130002-e875cbd4-0baf-11ef-a7bb-0242ac130002';
    $latitude = '41.994011';
    $longitude = '21.435921';

    // Креирање на URL за барање на Stormglass API
    $url = "https://api.stormglass.io/v2/weather/point?lat={$latitude}&lng={$longitude}&params=waterTemperature,waveHeight,windDirection,humidity,precipitation,pressure,cloudCover,airTemperature";

    // Поставување на HTTP барање со соодветните заглавја (API клуч)
    $headers = array(
        'Authorization: ' . $api_key
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    // Декодирање на JSON одговорот
    $data = json_decode($response, true);

    // Проверка дали одговорот е успешен
    if (isset($data['errors'])) {
        echo "Грешка при добивање на временски податоци: " . $data['errors']['params'][0];
    } else {
        // Приказ на добиените временски податоци
        echo "<div class='weather-info'>";
        echo "<h2>Временски податоци за Скопје, Македонија</h2>";
        if (isset($data['hours'][0]['airTemperature']['sg'])) {
            echo "<p>Температура на воздухот: " . $data['hours'][0]['airTemperature']['sg'] . "°C</p>";
        }
        if (isset($data['hours'][0]['waterTemperature']['sg'])) {
            echo "<p>Температура на водата: " . $data['hours'][0]['waterTemperature']['sg'] . "°C</p>";
        }
        if (isset($data['hours'][0]['waveHeight']['sg'])) {
            echo "<p>Висина на таласите: " . $data['hours'][0]['waveHeight']['sg'] . "м</p>";
        }
        if (isset($data['hours'][0]['windDirection']['sg'])) {
            echo "<p>Правец на ветерот: " . $data['hours'][0]['windDirection']['sg'] . "°</p>";
        }
        if (isset($data['hours'][0]['humidity']['sg'])) {
            echo "<p>Влажност на воздухот: " . $data['hours'][0]['humidity']['sg'] . "%</p>";
        }
        if (isset($data['hours'][0]['precipitation']['sg'])) {
            echo "<p>Дожд: " . $data['hours'][0]['precipitation']['sg'] . "</p>";
        }
        if (isset($data['hours'][0]['pressure']['sg'])) {
            echo "<p>Атмосферски притисок: " . $data['hours'][0]['pressure']['sg'] . "hPa</p>";
        }
        if (isset($data['hours'][0]['cloudCover']['sg'])) {
            echo "<p>Покриеност на облаци: " . $data['hours'][0]['cloudCover']['sg'] . "%</p>";
        }
        echo "</div>";

    }
    ?>
</div>
</body>
</html>
