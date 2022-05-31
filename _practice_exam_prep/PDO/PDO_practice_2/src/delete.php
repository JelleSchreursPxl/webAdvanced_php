<form action="delete.php" method="get">
    <h1>Delete</h1>
    <label for="delete"> Delete by name:
        <input id="delete" name="SQLdelete" type="text">
    </label>
    <br><br>
    <input type="submit" value="confirm">
</form>

<?php
$name=$_GET['SQLdelete'];

  $databases = array();
  $host = '127.0.0.1';
  $db   = 'users';
  $user = 'root';
  $pass = '';
  $charset = 'utf8mb4';
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

  try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $deleteStatementByName = $pdo->prepare(
      "DELETE FROM user WHERE user.name = :name" );
    $deleteStatementByName->bindParam(':name', $name, PDO::PARAM_STR_CHAR);
    if($deleteStatementByName->execute()){
        echo $name . ' has been deleted succesfully';
    }
  } catch (PDOException $exception){
    print("Exception:" . $exception->getMessage());
  }

  $pdo = null;
?>
