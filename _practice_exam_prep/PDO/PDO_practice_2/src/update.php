<form action="update.php" method="get">
  <h1>Update user</h1>
  <label for="name">Search for a user to update (name): </label>
    <input type="text" id="name" name="SQLfind">
  <br>
  <label for="update">Update username to: </label>
    <input type="text" id="update" name="SQLupdate">
  <br>
  <input type="submit" value="confirm">
</form>

<?php
$name=$_GET['SQLfind'];
$nameUpdate = $_GET['SQLupdate'];

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
    "UPDATE user SET name = :name WHERE user.name = :user;" );
  $deleteStatementByName->bindParam(':name', $nameUpdate, PDO::PARAM_STR_CHAR);
  $deleteStatementByName->bindParam(':user', $name, PDO::PARAM_STR_CHAR);
  if($deleteStatementByName->execute()){
    print('<p> ' .$name . ' has been updated succesfully to ' .$nameUpdate .'</p>');
  }
} catch (PDOException $exception){
  print("Exception:" . $exception->getMessage());
}

$pdo = null;
?><?php
