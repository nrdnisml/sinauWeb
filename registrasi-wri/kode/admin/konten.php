<?php
    if (!defined('INDEX')) {
        die("");
    }

    $halaman = array ("beranda","daftar-calon-android"
    ,"daftar-calon-game","daftar-calon-iot","daftar-calon-uiux",
    "daftar-calon-web","daftar-divisi","detil-calon-android","detil-calon-game"
    ,"detil-calon-iot","detil-calon-uiux","detil-calon-web",
    "edit-divisi", "tambah-divisi","daftar-admin","edit-admin","tambah-admin");

    if (isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else{
        $hal = "beranda";
    }

    foreach ($halaman as $h) {
        if ($hal == $h) {
            include "$h.php";
            break;
        }
    }
?>
