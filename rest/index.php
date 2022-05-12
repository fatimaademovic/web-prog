<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ("dao/ToDoDao.class.php");
require_once('../vendor/autoload.php');

Flight::register('todoDao', 'ToDoDao');

Flight::route("GET /test", function(){
Flight::todoDao()->test();

});
/*list all todo*/
Flight::route("GET /todo", function(){
Flight::json(Flight::todoDao()->get_all());

});
/*list individual todo*/
Flight::route("GET/todos", function($id){
Flight::json(Flight::todoDao()->get_by_id($id));

});
/** add todo i update*/

Flight::route("POST/todos", function(){

//$request=Flight::request;
//print_r($request->data->getData());
//$data=$request->data->getData();
Flight::json(Flight::todoDao()->add(Flight::request()->data->getData()));
//Flight::json($todo);


});

/*update */
Flight::route("PUT/todos/@id", function($id){

$data= Flight::request()->data->getData();
$data["id"]=$id;
//Flight::todoDao()->update($id, $data[description], $data[created]);
Flight::todoDao()->update($data);
Flight::json($data);
//print_r($id);  printat ce npr 18 ovo ili flight json ukljucen

Flight::register('flightService', 'FlightService');

});




/*delete*/
Flight::route("DELETE/todos/@id", function($id){

Flight::todoDao()->delete($id);
Flight::json(["message"=>"deleted"]);


});


Flight::route("/dorian", function(){
  echo 'hello worldbbb dorian';
});

Flight::route("/tin/@name", function($name){
  echo 'hello worldbbb tin'. $name;
});


Flight::start();

Flight::start();
?>
