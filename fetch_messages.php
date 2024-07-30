<?php
// Include the file with your API functions (adjust the path as needed)
require 'api/Messages.php';

// Check if the number is provided in the query string
if (!isset($_GET['number']) || empty($_GET['number'])) {
    http_response_code(400);
    echo json_encode(["message" => "Number parameter is required"]);
    exit;
}

// Fetch messages from the API
$number = $_GET['number'];
Messages::getMessages($number);
?>
