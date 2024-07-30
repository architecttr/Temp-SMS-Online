<?php
class Numbers {
    private static $apiUrl = 'https://tempsmsonline.com/api/numbers.php';

    public static function getNumbers() {
        $response = file_get_contents(self::$apiUrl);
        if ($response === FALSE) {
            http_response_code(500);
            echo json_encode(["message" => "Failed to fetch numbers"]);
            return;
        }
        header('Content-Type: application/json');
        echo $response;
    }
}
?>
