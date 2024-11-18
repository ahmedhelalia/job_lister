<?php
// Config file
require_once 'config.php';
// Autoload classes
spl_autoload_register(function($className){
    require_once "lib/".$className.".php";
});
