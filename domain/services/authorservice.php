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
    $sql = "SELECT first_name, last_name, email FROM authors";
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
}

?>
