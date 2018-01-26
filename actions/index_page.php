<?php

  class IndexPage extends BasePage {
    private $postModel;

    public function __construct() {
      $this->postModel = new Post();
    }

    protected function get() {
      if (isset($this->getData['page'])) {
        $currentPage = $this->getData['page'];
      } else {
        $currentPage = 1;
      }

      $posts = $this->postModel->getPostsWithCommentsCount($currentPage);
      $pageNumber = $this->postModel->pageNumber();
     if (isset($this->session['username'])) {
       echo 'Hello, ' . $this->session['username'] . '!';
     }
      require_once './view/index.php';
    }
  }
