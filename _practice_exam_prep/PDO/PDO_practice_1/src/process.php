<?php
$query = $_GET['SQLInput'];
if(stristr(strtolower($query),'delete')
  || stristr(strtolower($query),'drop')
  || stristr(strtolower($query),'truncate')){
  header("Location: input.php");
  exit();
}

$host = '127.0.0.1';
$db   = $_GET['select_database'];
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try{
  $pdo = new PDO($dsn, $user, $pass, $options);
  if(stristr(strtolower($query), 'select')){
    $statement = $pdo->query($query);
    // print de query af.
    print($query);
    // maak een tabel
    print("<table>");
    // voor zolang er rijen zijn in de opgehaalde data
    // print een tabelrij met data af
    while($row = $statement->fetch()){
      print('<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td></tr>');
    }
    print("</table>");
  }
  if(stristr(strtolower($query), 'insert')){
    print( $query );
    $nrRows = $pdo->exec($query);
    print( "$nrRows affected" );
  }
}  catch (PDOException $exception){
  print("Could not connect " . $exception->getMessage());
}
$pdo = null;
