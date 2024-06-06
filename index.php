<?php
require_once 'config/db.php';
require_once  'core/function_db.php';
require_once  'core/function.php';

$conn = connect();

$route = $_GET['route']; //NULL

// main - главная страница
// cat - категории
// article - статьи

switch ($route) {
    case NULL:
        $query = 'select * from info';
        $result = select($query);
        require_once 'template/main.php';
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "default";
}


