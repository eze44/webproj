<?php
session_start();
class DatabaseConnection {
  private $servername;
  private $username;
  private $password;
  private $dbname;

  public function __construct() {
    $this->servername = "localhost";
    $this->username = "endrit";
    $this->password = "endrit";
    $this->dbname = "webproj";
  }

  public function connect() {
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
    // try {
    //   $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    //   return $conn;
    // } catch(PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    //   return null;
    // }
  }
}
?>
