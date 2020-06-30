<?php

require_once("./domain/database.php");
require_once(__DIR__ . "/domain/services/messageservice.php");

$db = new DatabaseConnection();
$conn = $db->connect();
$msgService = new MessageService($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $email = $_POST["email"];
     $message = $_POST["message"];

     $resp = $msgService->saveMessage(["email" => $email, "message" => $message]);
     header('Content-Type: application/json');
     $return = `"success":$resp`;
     return ($return);

}

die("Invalid request");

?>
