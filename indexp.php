<?php
echo "Welcome";

require_once("rest/dao/ToDoDao.class.php");
$dao=new ToDoDao();
$results = $dao->get_all();
print_r($results);

 ?>
