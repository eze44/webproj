<?php


require_once("./domain/database.php");
require_once("./domain/services/authservice.php");
require_once(__DIR__ . "/domain/models/role.php");

$db = new DatabaseConnection();
$conn = $db->connect();
$authService = new AuthService($conn);

$email = $_POST["email"];
$password = $_POST["password"];

$authService->authenticate(["email" => $email, "password" => $password]);

if (isset($_SESSION["user_id"]) && isset($_SESSION["role"])) {
  // if ($_SESSION["role"] == Role::$ADMIN_ROLE) {
  //   // include(__DIR__ . "/dashboard/index.php"); // we can separate based on different views or contain the logic in one file
  //   header("Location: http://localhost/dashboard");
  // } else {
  //   // include(__DIR__ . "/dashboard/guest.php");
  //   header("Location: http://localhost/dashboard/guest.php");
  // }
  header("Location: http://localhost/dashboard");
} else {
  header("Location: http://localhost/login.php");
  exit();
}

// var_dump($email, $password);

?>
