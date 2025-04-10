<?php
header('Content-Type: application/json');

$api_key = "123456"; // अपनी API Key सेट करें

if (!isset($_GET['api']) || $_GET['api'] !== $api_key) {
    echo json_encode(["error" => "Invalid API key"]);
    exit;
}

if (!isset($_GET['url'])) {
    echo json_encode(["error" => "URL is required"]);
    exit;
}

$original_url = urlencode($_GET['url']);
$safelink_url = "http://www.hindiproweb.in/p/safelink-generator.html?url=$original_url";

echo json_encode(["safelink" => $safelink_url]);
