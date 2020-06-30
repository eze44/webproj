<?php
    require_once(__DIR__ . '/author.php');
    class Post {
      public $id;
      public $title;
      protected $content;
      public $image_path;
      public $created_at;
      public $author_id;
      public $author;

      public function __construct(){}

      public function withRow($row) {
        $this->id         = isset($row["id"]) ? $row["id"] : 0;
        $this->title      = isset($row["title"]) ? $row["title"] : 0;
        $this->content    = isset($row["content"]) ? $row["content"] : 0;
        $this->image_path = isset($row["image_path"]) ? $row["image_path"] : 0;
        $this->created_at = isset($row["created_at"]) ? $row["created_at"] : 0;
        $this->author_id  = isset($row["author_id"]) ? $row["author_id"] : 0;
        if ($this->author_id != 0) {
          $this->author = new Author();
          $author_row = [];
          $author_row["id"] = isset($row["author_id"]) ? $row["author_id"] : 0;
          $author_row["first_name"] = isset($row["first_name"]) ? $row["first_name"] : "";
          $author_row["last_name"] = isset($row["last_name"]) ? $row["last_name"] : "";
          $author_row["email"] = isset($row["email"]) ? $row["email"] : "";
          $this->author = $this->author->withRow($author_row);
        }
        return $this;
      }

      public function getContent() {
        return base64_decode($this->content);
      }
    }


?>
