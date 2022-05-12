<?php
echo "Welcome";



require_once("rest/dao/ToDoDao.class.php");

$id= $_REQUEST["id"]
$dao=new ToDoDao();
 $dao->delete($id);


 ?>
