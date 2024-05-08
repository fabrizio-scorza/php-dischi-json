<?php
// prendo il contenuto del file json
$data_string = file_get_contents('dischi.json');

// formatto la stringa 
$discs = json_decode($data_string, true);

// modifico l'header 
header('Content-type: application/json');

// formatto i dati da chiamare

$data = [
    'results' => $discs,
    'success' => true,
];

// invio i dati
echo json_encode($data);
