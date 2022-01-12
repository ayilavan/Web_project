<?php
//We first create the session with the session_start function. With that we can store the products that are added to cart, subsequently, the script will connect to MySQL using the database connection function we created earlier, in the functions.php file.
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();
// Page is set to home (home.php) by default, so when the visitor visits that will be the page they see.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';
?>