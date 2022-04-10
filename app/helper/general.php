<?php

function route($index){
    global $route;
    return $route[$index] ?? false;
}
