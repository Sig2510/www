<?php

  class EditPage extends BasePage {
    private $postModel;
    private $errors = [];

    public function __construct() {
      $this->postModel = new Post();
    }

    protected function get() {
      $post = $this->postModel->getPost($this->getData['id']);
      require_once './view/edit_post.php';
    }

    protected function post() {
      $validateErrors = $this->postModel->validate($this->postData['title'],
                                                   $this->postData['body'],
                                                   $this->postData['author']);

      if (!empty($validateErrors)) {
        $oldValues = $this->postData;
        require_once './view/edit_post.php';
        return;
      }

      $id = $this->postModel->editPost($this->postData['id'],
                                       $this->postData['title'],
                                       $this->postData['body'],
                                       $this->postData['author']);

      $this->redirect('index.php?r=/');
    }
  }
