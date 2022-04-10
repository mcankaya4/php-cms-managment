<?php

function appController($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . "/app/controller/" .$controllerName . ".php";
}

function appView($viewName){
    $viewName = strtolower($viewName);
    return PATH . "/app/view/" .$viewName . ".php";
}

function appUrl($url = false){
    return URL . "/" . $url;
}

function appPublicUrl($url = false){
    return URL . "/app/public/" . $url;
}
