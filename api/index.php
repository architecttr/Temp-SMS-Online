<?php
require 'Numbers.php';
require 'Messages.php';

$request = $_SERVER['REQUEST_URI'];

if (strpos($request, '/api/numbers') === 0) {
    Numbers::getNumbers();
} elseif (preg_match('/\/api\/messages\/(\d+)/', $request, $matches)) {
    Messages::getMessages($matches[1]);
} else {
    http_response_code(404);
    echo json_encode(["message" => "Endpoint not found"]);
}
?>
