<?php
  // namespace models\author;

  class Author {
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;


    public function withRow($row) {
      $this->id         = isset($row["id"]) ? $row["id"] : 0;
      $this->first_name = isset($row["first_name"]) ? $row["first_name"] : "";
      $this->last_name = isset($row["last_name"]) ? $row["last_name"] : "";
      $this->email = isset($row["email"]) ? $row["email"] : "";
      return $this;
    }

    public function getFullName() {
      return ucfirst($this->first_name) . " " . ucfirst($this->last_name);
    }

  }
?>
