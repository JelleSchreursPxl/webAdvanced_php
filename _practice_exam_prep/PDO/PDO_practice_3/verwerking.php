<?php

use model\ModelException;
use model\ProductModel;

require_once 'vendor/autoload.php';
$product = $_GET['select'];
$host = '127.0.0.1';
$db   = 'examenwa2020';
$user = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    $productModel=new ProductModel($pdo);
    $productModel->deleteProduct($product);
    print($product . 'product successfully deleted');
} catch (ModelException $exception){
    print("oops");
}

$pdo = null;
?>

