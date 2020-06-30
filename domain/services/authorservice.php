<?php

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

  }
}

?>
