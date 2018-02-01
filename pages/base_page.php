<?php

class BasePage {
  protected $getData, $postData;

  public function process($method, $getData, $postData) {
    $this->getData = $getData;
    $this->postData = $postData;

    switch ($method) {
      case 'GET':
        $this->get();
        break;
      case 'POST':
        $this->post();
        break;
    }
  }

  protected function get() {
    throw new \Exception("Unexpected get method call", 1);
  }

  protected function post() {
    throw new \Exception("Unexpected post method call", 1);
  }
}
