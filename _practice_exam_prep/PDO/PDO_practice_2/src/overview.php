<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Date input</title>
</head>
  <body>
  <header>
      <nav>
          <ul>
              <li><a href="add.php">Add</a></li>
              <li><a href="update.php">Update</a></li>
              <li><a href="delete.php">Delete</a></li>
          </ul>
      </nav>
  </header>
    <?php
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
      $statement = $pdo->query( 'SELECT * FROM user' );
        print("<h3>Users in the database: </h3>");
        print("<table>");
        while ($row = $statement->fetch()){
          print( '<tr><td>'.$row['name'].'</td></tr>' );
        }
        print("</table>");
      ?>
        <?php
      } catch (PDOException $exception){
        print("Could not connect " . $exception->getMessage());
      }

      $pdo = null;
    ?>
  </body>
</html>
