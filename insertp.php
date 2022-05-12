<?php
echo "Welcome";

require_once("rest/dao/ToDoDao.class.php");

$description= $_REQUEST["description"]
$created=$_REQUEST["created"];

$dao=new ToDoDao();
$results = $dao->add($description,$created);
print_r($results);

 ?>
