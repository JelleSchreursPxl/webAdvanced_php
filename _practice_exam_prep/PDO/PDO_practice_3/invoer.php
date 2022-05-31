<?php require_once 'vendor/autoload.php';
// naam: 
use model\ModelException;
use model\ProductModel;

require_once 'vendor/autoload.php';

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
    $results = $productModel->getAllProducts();
    print($productModel->getTotal());
    ?>
    <form action="verwerking.php" method="get">
        <label for="selection">Choose a product: </label>
          <select name="select" id="selection">
          <?php
            foreach($results as $result) {
              print('<option value='.$result['id'].'>'.$result['name'].' ('.$result['weight'].')'.'</option>');
            }
          ?>
        </select>
        <br>
      <input type="submit" value="delete">
    </form>
  <?php
    } catch (ModelException $exception){
        print($exception);
    }

  $pdo = null;
  ?>

