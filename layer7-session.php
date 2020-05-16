<?php

// v4r1able - obir.ninja

// php ile session(oturum) kullanarak geçerli saate göre layer7 saldırısı engelleme

date_default_timezone_set("Europe/Istanbul");

$tarih_saat = date("d.m.Y H");

session_start();

if(empty($_SESSION["".$tarih_saat.""])) {

$_SESSION["".$tarih_saat.""] = "1";

} else {

$eski_tarih = $_SESSION["".$tarih_saat.""];

$ekle = $_SESSION["".$tarih_saat.""]+1;

$_SESSION["".$tarih_saat.""] = $ekle;

}

if($_SESSION["".$tarih_saat.""]>100) { // 100 yerine istediğiniz sınırı yazabilirsiniz.

//buraya kişiyi banlayacağınız kodları yazın örnek olarak cloudflare api kullanarak ip adresi yasaklayabilirsiniz.
echo 'banned';
exit;

}

echo $_SESSION["".$tarih_saat.""];

?>
