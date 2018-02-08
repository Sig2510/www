<?php
session_start();

require_once './models/base_model.php';
require_once './models/category.php';
require_once './models/product.php';

require_once './pages/base_page.php';
require_once './pages/index_page.php';

require_once './router.php';

$router = new Router($_SERVER, $_GET, $_POST);

$router->addRoute('/', new IndexPage());
$router->serve($_SESSION);
