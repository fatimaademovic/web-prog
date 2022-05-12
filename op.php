<?php

require_once("rest/dao/ToDoDao.class.php");
$dao=new ToDoDao();

$op=$_REQUEST["op"];
switch ($op) {
  case 'insert':
  $description= $_REQUEST["description"]
  $created=$_REQUEST["created"];

   $dao->add($description,$created);

    break;
    case 'delete':
    $id= $_REQUEST["id"]
     $dao->delete($id);

      break;
    case 'update':
    $id= $_REQUEST["id"]
    $description= $_REQUEST["description"]
    $created=$_REQUEST["created"];
    $dao->update($id,$description,$created);
        break;
    case 'get':

  default:
  $results = $dao->get_all();
  print_r($results);

    break;
}

$id= $_REQUEST["id"]

 $dao->delete($id);





 ?>
