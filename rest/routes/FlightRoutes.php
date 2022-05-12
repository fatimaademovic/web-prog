<?php

// CRUD operations for todos entity

/**
* List all todos
*/
Flight::route('GET /flights', function(){
  Flight::json(Flight::flightService()->get_all());
});

/**
* List invidiual flight
*/
Flight::route('GET /flights/@id', function($id){
  Flight::json(Flight::flightService()->get_by_id($id));
});

/**
* List invidiual flight todos
*/
Flight::route('GET /flights/@id/todos', function($id){
  Flight::json(Flight::todoService()->get_todos_by_flight_id($id));
});


/**
* add flights
*/
Flight::route('POST /flights', function(){
  Flight::json(Flight::flightService()->add(Flight::request()->data->getData()));
});

/**
* update flights
*/
Flight::route('PUT /flights/@id', function($id){
  $data = Flight::request()->data->getData();
  Flight::json(Flight::flightService()->update($id, $data));
});

/**
* delete flights
*/
Flight::route('DELETE /flights/@id', function($id){
  Flight::flightService()->delete($id);
  Flight::json(["message" => "deleted"]);
});

?>
