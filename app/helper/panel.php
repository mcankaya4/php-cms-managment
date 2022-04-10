<?php

function panelController($controllerName)
{
    $controllerName = strtolower($controllerName);
    $isFile = PATH . "/panel/controller/" . $controllerName . ".php";
    if (!file_exists(PATH . "/panel/controller/" . $controllerName . ".php")) {
        $dirs = glob(PATH . "/panel/controller/*", GLOB_ONLYDIR);
        foreach ($dirs as $dir) {
            if (file_exists($dir . "/" . $controllerName . ".php")) {
                $isFile = $dir . "/" . $controllerName . ".php";
                break;
            }
        }
    }
    return $isFile;
}

function panelView($viewName)
{
    $viewName = strtolower($viewName);
    return PATH . "/panel/view/" . $viewName . ".php";
}

function panelUrl($url = false)
{
    return URL . "/panel/" . $url;
}

function panelPublicUrl($url = false)
{
    return URL . "/panel/public/" . $url;
}