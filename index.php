<?php

require_once __DIR__ . "/app/init.php";

$route = array_filter(explode("/", $_SERVER["REQUEST_URI"]));

if (SUBFOLDER) {
    array_shift($route);
}

if (!route(0)) {
    $route[0] = "index";
}

if (!file_exists(appController(route(0)))) {
    $route[0] = "404";
}

$settingsQuery = $db->prepare("SELECT * FROM settings");
$settingsQuery->execute();
$settingsQuery = $settingsQuery->fetch(PDO::FETCH_OBJ);
if ($settingsQuery->maintenance == 1 && route(0) != "panel"){
    $route[0] = "maintenance";
}

require_once appController(route(0));







