<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*use Firebase\JWT\JWT;
use Firebase\JWT\Key;*/

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/services/FlightService.php';
require_once __DIR__.'/dao/FlightDao.php';

Flight::register('flightDao', 'FlightDao');
Flight::register('flightService', 'FlightService');

/*
Flight::map('error', function(Exception $ex){
    // Handle error
    Flight::json(['message' => $ex->getMessage()], 500);
});
*/
/*
// middleware method for login
Flight::route('/*', function(){
  //return TRUE;
  //perform JWT decode
  $path = Flight::request()->url;
  if ($path == '/login' || $path == '/docs.json') return TRUE; // exclude login route from middleware

  $headers = getallheaders();
  if (@!$headers['Authorization']){
    Flight::json(["message" => "Authorization is missing"], 403);
    return FALSE;
  }else{
    try {
      $decoded = (array)JWT::decode($headers['Authorization'], new Key(Config::JWT_SECRET(), 'HS256'));
      Flight::set('user', $decoded);
      return TRUE;
    } catch (\Exception $e) {
      Flight::json(["message" => "Authorization token is not valid"], 403);
      return FALSE;
    }
  }
});*/

/* REST API documentation endpoint */
/*Flight::route('GET /docs.json', function(){
  $openapi = \OpenApi\scan('routes');
  header('Content-Type: application/json');
  echo $openapi->toJson();
});*/

require_once __DIR__.'/routes/FlightRoutes.php';

Flight::start();
?>
