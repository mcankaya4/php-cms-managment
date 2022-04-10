<?php

function post($name){
    if (isset($_POST[$name])){
        if (is_array($_POST[$name])){
            return array_map(function ($value){
                return htmlspecialchars(trim($value));
            },$_POST[$name]);
        }
        return htmlspecialchars(trim($_POST[$name]));
    }
}

function get($name){
    if (isset($_GET[$name])){
        if (is_array($_GET[$name])){
            return array_map('htmlspecialchars|trim',$_GET[$name]);
        }
        return htmlspecialchars(trim($_GET[$name]));
    }
}
