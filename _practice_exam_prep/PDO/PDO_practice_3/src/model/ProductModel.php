<?php namespace model;

use PDO;
use PDOException;

class ProductModel {
  private $pdo;
  public function __construct(PDO $pdo){
    $this->pdo = $pdo;
  }

  /**
   * @throws ModelException
   */
  public function getAllProducts(){
    // multidimensionele array
    try{    $statement = $this->pdo->query(
      "SELECT * FROM product");
      return $statement->fetchAll();
    } catch(PDOException $exception){
      throw new ModelException($exception->getMessage());
    }
  }

  /**
   * @throws ModelException
   */
  public function deleteProduct($id){
    try {
      $deleteStatementByName = $this->pdo->prepare(
        "DELETE FROM product WHERE product.id = :id" );
      $deleteStatementByName->bindParam(':id', $id, PDO::PARAM_INT);
      $deleteStatementByName->execute();
    } catch (PDOException $exception){
      throw new ModelException($exception->getMessage());
    }
  }

  public function getTotal(){
    $weight = 0;
    $statement = $this->pdo->query(
      "SELECT * FROM product");
    while ($row = $statement->fetch()){
      $weight += $row['weight'];
    }
    return $weight;
  }

}
