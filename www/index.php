<?php
/* 
DOCS https://flightphp.com/ 
*/
require "flight/Flight.php";


Flight::route("GET /", function() {
    echo "hello world!";
});


Flight::route("GET /hello", function() {
    Flight::render('base/head', null, 'head_content');
    Flight::render('base/header', array("logged_basecontext"=> true), 'header_content');
    Flight::render("hello/username_query");
});


Flight::route("GET /admin", function() {
    Flight::render('base/head', null, 'head_content');
    Flight::render('base/header', array("logged_basecontext"=> true), 'header_content');
    Flight::render("admin/login");
});


Flight::map('notFound', function() {
    Flight::render('base/head', null, 'head_content');
    Flight::render("error/404");
});


Flight::start();
