<?php

class Router {
  private $postData, $getData, $serverData;
  private $routes = [];

  const ROUTE_KEY = 'r';

  public function __construct($serverData, $getData, $postData) {
    $this->serverData = $serverData;
    $this->getData = $getData;
    $this->postData = $postData;
  }

  public function addRoute($url, $page) {
    $this->routes[$url] = $page;
  }

  public function serve() {
    foreach ($this->routes as $url => $page) {
      if ($url == $this->getData[self::ROUTE_KEY]) {
        $page->process($this->serverData['REQUEST_METHOD'], $this->getData, $this->postData);
        return;
      }
    }

    header('location: /index.php?r=/');
  }
}
