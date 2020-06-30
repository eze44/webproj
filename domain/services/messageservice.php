<?php

  class MessageService {
    protected $db;

    public function __construct($db) {
      if ($db != null) {
        $this->db = $db;
      } else {
        die("Null db object @ PostSrv");
      }
    }

    public function saveMessage($data) {
      $email = $data["email"];
      $message = $data["message"];
      $sql = "INSERT INTO questions (email, message)
              VALUES ('$email', '$message')";

      $result = $this->db->query($sql);      
      if ($result === TRUE) {
        return true;
      }
      return false;
    }

  }


?>
