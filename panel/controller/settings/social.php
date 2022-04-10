<?php
if (isset($_POST["submit"])) {
    $settingsSocialUpdateQuery = $db->prepare("UPDATE settings SET facebook=?,twitter=?,instagram=?,youtube=? WHERE id=?");
    $settingsSocialUpdateQuery->execute([
        post("facebook"), post("twitter"), post("instagram"), post("youtube"), 1
    ]);
    if ($settingsSocialUpdateQuery->rowCount() > 0) {
        $alert = Alert::success("Tebrikler, İşlem başarılı.");
    } else {
        $alert = Alert::error("Hata! Güncelle işlemi başarısız.");
    }
}

$settingsSocialShowQuery = $db->prepare("SELECT facebook,twitter,instagram,youtube FROM settings");
$settingsSocialShowQuery->execute();
if ($settingsSocialShowQuery->rowCount() > 0) {
    $getData = $settingsSocialShowQuery->fetch(PDO::FETCH_OBJ);
} else {
    die("Settings veri tabanı bağlantı hatası!!!");
}

require_once panelView("settings/social");
$alert = null;