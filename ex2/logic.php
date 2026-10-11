<?php
$apiKey = '4c6958a9060d4bc565a82e1c'; // <-- posa aquí la teva apiKey
 
$euros = $_GET['euros'];
$moneda = $_GET['moneda'];
 
$url = "https://v6.exchangerate-api.com/v6/$apiKey/latest/EUR";
$response = file_get_contents($url);
$data = json_decode($response, true);
 
$canvi = $data['conversion_rates'][$moneda];
$resultat = round($euros * $canvi, 2);
 
echo "$euros euros són $resultat $moneda.";
?>