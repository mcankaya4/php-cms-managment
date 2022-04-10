<?php

if (!route(1)){
    $route[1] = "index";
}

if (!file_exists(panelController(route(1)))){
    $route[1] = "index";
}

$menus = [
    "index" =>[
        "title" => "Anasayfa",
        "icon" => "fas fa-tachometer-alt"
    ],
    "user" => [
        "title" => "Üyeler",
        "icon" => "fas fa-users",
        "submenu" => [
            "add-user" => "Üye Ekle",
            "users" => "Üyeleri Listele"
        ]
    ],
    "settings" => [
        "title" => "Ayarlar",
        "icon" => "fas fa-cogs",
        "submenu" => [
            "general" => "Genel Ayarlar",
            "social" => "Sosyal Medya Ayarları",
        ]
    ]
];

require_once panelController(route(1));


