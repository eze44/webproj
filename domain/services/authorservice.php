<?php

require_once(__DIR__ . '/../models/author.php');
class AuthorService {
  protected $db;

  public function __construct($db) {
    if ($db != null) {
      $this->db = $db;
    } else {
      die("Null db object @ AuthorSrv");
    }
  }

  public function getAuthors() {
    $sql = "SELECT id, first_name, last_name, email FROM authors";
    $result = $this->db->query($sql);
    $authors = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $p = new Author();
        $authors[] = $p->withRow($row);
      }
    }
    return $authors;
  }

  public function save($data) {
    $f_name = $data["first_name"];
    $l_name = $data["last_name"];
    $email = $data["email"];
    $role = $data["role_id"];
    $pwd = md5($data["password"]);

    $sql = "INSERT INTO authors (first_name, last_name, email, password, role_id)
            VALUES ('$f_name', '$l_name', '$email', '$pwd', '$role')";

    return $this->db->query($sql);
  }
}

?>
