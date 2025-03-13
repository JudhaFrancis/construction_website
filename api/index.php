<?php
include("include/header.php");
$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', rtrim($_SERVER['REQUEST_URI_PATH'], '/'));
$page_det = end($segments);

switch ($page_det) {
    case "about":
        include('pages/about.php');
        break;
    case "products":
        include('pages/products.php');
        break;
    case "contact":
        include('pages/contact.php');
        break;
     default:
        include('pages/home.php');
        break;
}
include("include/footer.php");
