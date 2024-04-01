<?php
require_once '../dispatcher.php';
require_once '../routing.php';
require_once '../controllers.php';
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
$action_url = $_SERVER["REQUEST_URI"];
dispatch($routing, $action_url);