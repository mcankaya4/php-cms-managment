<?php
if (isset($_POST["submit"])) {
    $settingsGeneralUpdateQuery = $db->prepare("UPDATE settings SET title=?,description=?,keywords=?,maintenance=? WHERE id=?");
    $settingsGeneralUpdateQuery->execute([
        post("title"),post("description"),post("keywords"),post("maintenance"), 1
    ]);
    if ($settingsGeneralUpdateQuery->rowCount() > 0) {
        $alert = Alert::success("Tebrikler, İşlem başarılı.");
    } else {
        $alert = Alert::error("Hata! Güncelle işlemi başarısız.");
    }
}

$settingsGeneralShowQuery = $db->prepare("SELECT title,description,keywords,maintenance FROM settings");
$settingsGeneralShowQuery->execute();
if ($settingsGeneralShowQuery->rowCount() > 0) {
    $getData = $settingsGeneralShowQuery->fetch(PDO::FETCH_OBJ);
} else {
    die("Settings veri tabanı bağlantı hatası!!!");
}

require_once panelView("settings/general");
$alert = null;