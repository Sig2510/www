<?php

class Router {
  const ROUTE_KEY = 'r';

  private $getArray;
  private $postArray;
  private $session;
  private $actionArray = [];

  public function __construct($getArray, $postArray, &$session, $server) {
    $this->getArray = $getArray;
    $this->postArray = $postArray;
    $this->getArray = $getArray;
    $this->postArray = $postArray;
    $this->session =& $session;
    $this->server = $server;
  }

  public function attach($actionName, $action) {
    $this->actionArray[$actionName] = $action;
  }

  public function serve() {
    switch ($this->getArray[self::ROUTE_KEY]) {
      case '/':
        $this->actionArray['indexPage']->process($_SERVER['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
        break;
      case '/post':
        $this->actionArray['postPage']->process($_SERVER['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
        break;
      case '/addPost':
        $this->actionArray['addPostPage']->process($_SERVER['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
        break;
        case '/deletePost':
          $this->actionArray['deletePostPage']->process($_SERVER['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
          break;
          case '/editPost':
            $this->actionArray['editPost']->process($_SERVER['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
            break;
            case '/register':
        $this->actionArray['registerPage']->process($this->server['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
        break;
      case '/login':
        $this->actionArray['loginPage']->process($this->server['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
        break;
      case '/logout':
        $this->actionArray['logoutPage']->process($this->server['REQUEST_METHOD'], $this->getArray, $this->postArray, $this->session);
        break;
      default:
        header('location: /index.php?r=/');
        break;
    }
  }

  public function dump() {
    var_dump($this);
  }

}
