<?php
class ToDoDao{

private $conn;


public function __construct(){
  $servername = "127.0.0.1";
  $username = "root";
  $password = "123456";
  $schema="database";

    $this ->conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=$schema", $username, $password);
    // set the PDO error mode to exception
    $this ->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}

public function get_all(){
  $stmt =$this-> $conn->prepare("SELECT FROM * todo");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function get_by_id($id){
  $stmt = $this->conn->prepare("SELECT * FROM todos WHERE id = :id");
  $stmt->execute(['id' => $id]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return reset($result);

}

public function add($todo){
  $stmt = $this->conn->prepare("INSERT INTO todos (description, created) VALUES ('$description', '$created')");
    $stmt->execute();
}

public function delete(){
  $stmt = $this->conn->prepare("DELETE FROM todos WHERE id=$id");
 $stmt->execute();
}

public function update($todo){
  $stmt = $this->conn->prepare("UPDATE todos SET description='$description', created='$created' WHERE id=$id");
    $stmt->execute();
}
}
