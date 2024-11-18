<?php
// Start Session
session_start();
// Config file
require_once 'config.php';
// include Helpers
require_once 'helpers/system_helper.php';
// Autoload classes
spl_autoload_register(function($className){
    require_once "lib/".$className.".php";
});
