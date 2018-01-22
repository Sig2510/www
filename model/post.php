<?php

  class Post extends BaseModel {
    public function __construct() {
      parent::__construct();
    }
    public function validate($title, $body, $author) {
      $errors = [];

      if (strlen($title) < 5) {
        $errors[] = 'Title string is too short!';
      }

      if (empty($body)) {
        $errors[] = 'Body should not be empty!';
      }

      if ($author == 'admin') {
        $errors[] = 'Admin should not create posts!';
      }

      return $errors;
    }
    public function getPosts() {

      $res = $this->conn->query('SELECT * FROM posts ORDER BY creation_date DESC ' );
      return $res->fetchALL(PDO::FETCH_ASSOC);

    }

    public function getPostsWithCommentsCount(){

      $res = $this->conn->query('SELECT p.id, p.author, p.title, p.body, COUNT(c.id) as comments_count
      FROM posts as p LEFT JOIN comments as c ON p.id = c.post_id GROUP BY p.id
      ORDER BY creation_date DESC');
      return $res->fetchALL(PDO::FETCH_ASSOC);

    }

    public function getPost($id) {
$stmt = $this->conn->prepare('SELECT * FROM posts WHERE id = ?');
$stmt->execute([$id]);
return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addPost($title, $body, $author) {
$stmt = $this->conn->prepare('INSERT INTO posts (title, body, author)
VALUES (?, ?, ?)');
$stmt->execute([$title, $body, $author]);
return $this->conn->LastInsertId();
    }
    public function deletePost($id) {
    $stmt = $this->conn->prepare('DELETE FROM posts WHERE id = ?');
    $stmt->execute([$id]);

    }
    public function editPost($id, $title, $body, $author) {
    $stmt = $this->conn->prepare('UPDATE `posts` SET `title` = ?, `body` = ?, `author` = ? WHERE `posts`.`id` = ?');
    $stmt->execute([$title, $body, $author, $id]);

    }
}
