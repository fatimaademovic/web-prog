<?php

require '../vendor/autoload.php';


Flight::route("/", function(){
  echo 'hello worldbbb';
});

Flight::start();

?>
