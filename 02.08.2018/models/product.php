<?php

class Product extends BaseModel {
  private $queryByCategoryId;
  public function __construct() {
    parent::__construct();
    $this->queryByCategoryId = $this->conn->prepare('SELECT *
                                                     FROM products
                                                     WHERE category_id = ?');
  }

  public function getAll() {
    $res = $this->conn->query('SELECT * FROM products ORDER BY title ASC');
    return $res->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getByCategoryId($id) {
    $this->queryByCategoryId->execute([$id]);
    return $this->queryByCategoryId->fetchAll(PDO::FETCH_ASSOC);
  }
}
