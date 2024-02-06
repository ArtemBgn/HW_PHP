<?php

$uri =  $_SERVER['REQUEST_URI'];
// якщо у запиті є гет-параметри (знак ?), то прибираємо цю частину
$pos = strpos($uri, '?');
if($pos > 0) {
    $uri = substr($uri, 0, $pos);
}
$routes = [
    '/'        => 'index.php',
    '/page1'   => 'page1.php',
    '/page2'   => 'page2.php'
];
if(isset($routes[$uri])) { //у маршрутах є відповідний запис
    $page_body = $routes[$uri] ;
    include '_layout.php' ;
}
else {
    echo "$uri not found";
}