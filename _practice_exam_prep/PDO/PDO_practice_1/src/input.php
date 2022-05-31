<?php
$databases = array();
$host = '127.0.0.1';
$db   = '';
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
  $statement = $pdo->query( 'SHOW DATABASES' );
  while ($row = $statement->fetch()){
    $databases[] = $row['Database'];
  }
  ?>
<form action="process.php" method="get">
    <h1>Databases</h1>
    <label for="selection">Select a database</label>
        <select name="select_database" id="selection">
          <?php
          for ($i=0;$i<count($databases);$i++) {
            print('<option>'.$databases[$i].'</option>');
          }
          ?>
        </select>
    <br>
    <p>SQL-QUERY (DROP, DELETE en TRUNCATE are not allowed</p>
    <label for="sql">Enter a SQL</label><br>
    <textarea id="sql" name="SQLInput" cols="40" rows="5"></textarea>
    <br>
    <input type="submit" value="confirm">
</form>
<?php
} catch (PDOException $exception){
  print("Could not connect " . $exception->getMessage());
}

$pdo = null;
?>