<?php
class Messages {
    private static $apiUrl = 'https://tempsmsonline.com/api/messages/';

    public static function getMessages($number) {
        $url = self::$apiUrl . urlencode($number);
        $response = file_get_contents($url);
        if ($response === FALSE) {
            http_response_code(500);
            echo json_encode(["message" => "Failed to fetch messages"]);
            return;
        }
        header('Content-Type: application/json');
        echo $response;
    }
}
?>
