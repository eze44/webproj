<?php

require_once(__DIR__ . "/../models/role.php");

class AuthService {
  protected $db;

  public function __construct($db) {
    if ($db != null) {
      $this->db = $db;
    } else {
      die("Null db object @ PostSrv");
    }
  }

  public function authenticate($data) {
    $email = $data["email"];
    $pwd = md5($data["password"]);

    $sql = "SELECT id, email, password, role_id FROM authors
            WHERE email = '$email' AND password = '$pwd'";

    $result = $this->db->query($sql);
    if ($result->num_rows != 0) {
      $row = $result->fetch_object();
      $_SESSION["user_id"] = $row->id;
      switch ((int)($row->role_id)) {
        case Role::$ADMIN_ROLE:
          $_SESSION["role"] = Role::$ADMIN_ROLE;
          break;
        case Role::$USER_ROLE:
          $_SESSION["role"] = Role::$USER_ROLE;
          break;
        default:
          break;
      }
      return;
    }
    $_SESSION["role"] = null;
  }

}

?>
