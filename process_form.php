<?php

require_once 'parse_link.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $checkoutLink = $_POST['checkoutlink'];

    // Call the getJsonResponse function with the provided checkoutlink
    $jsonResponse = getJsonResponse(['checkoutlink' => $checkoutLink]);

    // Return the JSON response
    header('Content-Type: application/json');
    echo json_encode($jsonResponse);
}
