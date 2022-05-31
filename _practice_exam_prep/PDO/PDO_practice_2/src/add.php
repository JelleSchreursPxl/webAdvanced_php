<form action="add.php" method="get">
  <h1>Add user</h1>
  <label for="add">
    <input type="text" id="add" name="SQLAddition">
  </label>
  <br><br>
  <input type="submit" value="confirm">
</form>

<?php
$name=$_GET['SQLAddition'];

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
    "INSERT INTO user (id, name) VALUES (NULL, :name);" );
  $deleteStatementByName->bindParam(':name', $name, PDO::PARAM_STR_CHAR);
  if($deleteStatementByName->execute()){
    print('<p> ' .$name . 'has been added succesfull </p>');
  }
} catch (PDOException $exception){
  print("Exception:" . $exception->getMessage());
}

$pdo = null;
?>