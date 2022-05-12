
<?php
require_once("rest/dao/ToDoDao.class.php");
$id= $_REQUEST["id"]
$description= $_REQUEST["description"]
$created=$_REQUEST["created"];

$dao=new ToDoDao();
$dao->update($id,$description,$created);
