<?php

  require_once(__DIR__ . '/../models/post.php');
  require_once(__DIR__ . '/../models/role.php');

  class PostService {
    protected $db;

    public function __construct($db) {
      if ($db != null) {
        $this->db = $db;
      } else {
        die("Null db object @ PostSrv");
      }
    }

    public function getLatestPosts() {
      $sql = "SELECT id, title, image_path, created_at FROM posts order by created_at desc limit 4;";
      $result = $this->db->query($sql);
      $posts = [];
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $p = new Post();
          $posts[] = $p->withRow($row);
        }
      }
      return $posts;
    }

    public function search($page, $take = null, $search) {
      $offset = 0;
      $limit = ($take != null) ? $take : 3;
      if ($page > 1)
        $offset = ($limit * $page) - $limit;

      $sql = "SELECT p.*, a.id as author_id, a.first_name, a.last_name, a.email FROM posts as p
              left join authors as a on a.id = p.author_id
              where p.title like '%". $search . "%'
              order by p.created_at desc
              limit $limit offset $offset";

      $result = $this->db->query($sql);
      $posts = [];
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $p = new Post();
          $posts[] = $p->withRow($row);
        }
      }
      return $posts;
    }

    public function paginate($page, $take = null) {
      $offset = 0;
      $limit = ($take != null) ? $take : 3;
      if ($page > 1)
        $offset = ($limit * $page) - $limit;

      if ($_SESSION["role"] == Role::$ADMIN_ROLE) {
        $sql = "SELECT p.*, a.id as author_id, a.first_name, a.last_name, a.email FROM posts as p
                left join authors as a on a.id = p.author_id
                order by p.created_at desc
                limit $limit offset $offset";
      } else if($_SESSION["role"] == Role::$USER_ROLE) {
        $user_id = $_SESSION["user_id"];
        $sql = "SELECT p.*, a.id as author_id, a.first_name, a.last_name, a.email FROM posts as p
                left join authors as a on a.id = p.author_id
                where author_id = $user_id
                order by p.created_at desc
                limit $limit offset $offset";
      } else {
        $sql = "SELECT p.*, a.id as author_id, a.first_name, a.last_name, a.email FROM posts as p
                left join authors as a on a.id = p.author_id
                order by p.created_at desc
                limit $limit offset $offset";
      }
      $result = $this->db->query($sql);
      $posts = [];
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $p = new Post();
          $posts[] = $p->withRow($row);
        }
      }
      return $posts;
    }

    public function getById($id) {
      $sql = "SELECT p.*, a.id as author_id, a.first_name, a.last_name, a.email FROM posts as p
              left join authors as a on a.id = p.author_id
              where p.id = $id";
      $result = $this->db->query($sql);
      $post = null;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $p = new Post();
          $post = $p->withRow($row);
        }
      }
      return $post;
    }

    public function save($data) {
      $dt = new DateTime($item->pubDate);
      $created_at = $dt->format('Y-m-d H:i:s');

      $title = $data["title"];
      $content = base64_encode($data["content"]);
      $image_p = $data["image_path"];
      $author_id = $data["author_id"];
      $sql = "INSERT INTO posts (title, content, image_path, author_id, created_at)
              VALUES ('$title', '$content', '$image_p', '$author_id', '$created_at')";

      return $this->db->query($sql);
    }

    public function update($data) {
      $dt = new DateTime($item->pubDate);
      $created_at = $dt->format('Y-m-d H:i:s');

      $id = $data["id"];
      $title = $data["title"];
      $content = base64_encode($data["content"]);
      $image_p = $data["image_path"];
      $author_id = $data["author_id"];
      $sql = "UPDATE posts set title = '$title', content = '$content' where id = '$id'";

      return $this->db->query($sql);
    }
  }


?>
