<?php

require '../vendor/autoload.php';

Flight::route("/", function(){
  echo 'hello worldq';
});

Flight::start();

?>
