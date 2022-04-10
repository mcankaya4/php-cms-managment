<?php
session_start();
ob_start();

function loadClasses($className)
{
    require_once __DIR__ . "/classes/" . strtolower($className) . ".php";
}

spl_autoload_register("loadClasses");

$config = require_once __DIR__ . "/config.php";

try {
    $db = new PDO("mysql:host=" . $config["db"]["host"] . ";dbname=" . $config["db"]["dbname"] . ";charset=utf8", $config["db"]["user"], $config["db"]["pw"]);
} catch (PDOException $e) {
    die($e->getMessage());
}

foreach (glob(__DIR__.'/helper/*.php') as $helperFile) {
    require_once $helperFile;
}






