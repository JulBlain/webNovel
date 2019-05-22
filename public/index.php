<?php
define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
$truc = new App();
$truc->load();

//start the session if it is not started automatically by the server
if (!isset($_SESSION)) {
    session_start();
}

App::router();
