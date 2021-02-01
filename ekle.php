
<?php 


$db = new PDO("mysql:host=localhost;dbname=stokuygulamasi;charset=utf8", "root", "");


$query = $db->prepare("INSERT INTO stok SET
urunkodu =?,
urunadi = ?,
fiyat = ?,
stokdurumu = ?,
stokadet=?,
ozellikleri=?
");
$insert = $query->execute(array(
	 $_POST['urunkodu'],
     $_POST['urunadi'],
     $_POST['fiyat'],
     $_POST['stokdurumu'],
     $_POST['stokadet'],
     $_POST['ozellikleri']
));
$db=null;
if ( $insert ){
    header("Location:stok.php");
}
else 
{
	echo "Veri Ekleme Başarısız";
}

 ?>

