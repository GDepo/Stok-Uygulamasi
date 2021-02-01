<?php 
session_start();
$id=$_SESSION['urunid'];

include "baglanti.php";

$query = $vt->prepare("UPDATE stok SET
urunkodu=:urunkodu,
urunadi = :urunadi,
fiyat = :fiyat,
stokdurumu = :stokdurumu,
stokadet = :stokadet,
ozellikleri = :ozellikleri
WHERE urunid =".$id);
$update = $query->execute(array(
	 "urunkodu"=>$_POST['urunkodu'],
     "urunadi" => $_POST['urunadi'],
     "fiyat" => $_POST['fiyat'],
     "stokdurumu" => $_POST['stokdurumu'],
     "stokadet" => $_POST['stokadet'],
     "ozellikleri" => $_POST['ozellikleri']
     
));
if ( $update ){
    header("location:stok.php");
}
else {
	echo "Başarısız......!";
}


 ?>