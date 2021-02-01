<?php 
$deneme=$_GET['urunid'];
if (isset($_GET['urunid'])) {
    include "baglanti.php";
    $sorgu =$vt->prepare('DELETE FROM stok WHERE urunid=?');
    $sonuc =$sorgu->execute([$_GET['urunid']]);
    if ($sonuc) {
        header("location:stok.php");
    }
    else {
        echo   "Başarısız.";
    }
}




 ?>