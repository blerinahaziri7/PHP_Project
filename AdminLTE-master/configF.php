<?php
 
 // Include the autoloader provided in the SDK
require_once(__DIR__.'/Facebook/autoload.php');

define('APP_ID', '756613152367433');
define('APP_SECRET', '3d4a7fe91c298a06edcfa5e0bdf7f126');
define('API_VERSION', 'v2.5');
//define('FB_BASE_URL', 'http://localhost/PHP_Project/AdminLTE-master/');

define('BASE_URL', 'http://localhost:8080/PHP_Project/AdminLTE-master/');

if(!session_id()){
    session_start();
}


// Call Facebook API
$fb = new Facebook\Facebook([
 'app_id' => APP_ID,
 'app_secret' => APP_SECRET,
 'default_graph_version' => API_VERSION,
]);


// Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper();



?>