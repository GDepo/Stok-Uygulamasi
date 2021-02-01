<?php

$db = new PDO("mysql:host=localhost;dbname=stokuygulamasi;charset=utf8", "root", "");
$sorgu=$db->prepare('SELECT * FROM stok');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);

 ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>

         <!-- Materialize css -->
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>STOK UYGULAMASI</title>
        <!-- Favicon-->
         <link rel="shortcut icon"  href="img/favicon.ico">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />


        <!----------------------------------- CSS KISMI ------------------------------------------------------->
        <style type="text/css">
            fieldset.scheduler-border {
            border: 1px groove #000 !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            
}

             legend.scheduler-border {
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    margin:20px;
    border-bottom:none;
}


        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  bg-secondary text-uppercase fixed-top " id="mainNav" >
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="https://gdyazılım.com" title="gdyazılım.com a gitmek için tıklayınız">GD YAZILIM</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img src="img/favicon.ico" height="25px" width="25px">MENÜ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">ÜRÜN EKLE</a>
          <a class="dropdown-item" href="stok.php">STOK GÖRÜNTÜLE</a>
          
      </li>
                    </ul>
                </div>
            </div>
        </nav>

        
<br><br><br><br><br>
<div class="container">
      <div class="row justify-content-center">
        <div class="col">
         <table class="table table-bordered table-striped" style="background-color:lightcyan;">

            <tr>
              <td><b>Ürün ID</b></td>
              <td><b>Ürün Kodu</b></td>
             <td><b>Ürün Adı</b></td>
             <td><b>Fiyat</b></td>
             <td><b>Stok Durumu</b></td>
             <td><b>Stok Adet</b></td>
             <td><b>Özellikleri</b></td>
             <td></td>
             <td></td>

             </tr>
             
             <?php
             foreach($personellist  as $stok){?>
             
                <tr>
                <td><?= $stok->urunid ?></td>
                <td><?= $stok->urunkodu ?></td>
                <td><?= $stok->urunadi ?></td>
                <td><?= $stok->fiyat ?></td>
                <td><?= $stok->stokdurumu ?></td>
                <td><?= $stok->stokadet ?></td>
                <td><?= $stok->ozellikleri ?></td>
                <td><a href="stoksil.php?urunid=<?= $stok->urunid ?> " class="btn btn-danger">Sil</a></td>
                <td><a href="güncelle.php?urunid=<?= $stok->urunid ?> " class="btn btn-secondary">Güncelle</a></td>
                </tr>
                 
             <?php } ?><!--- Silme Bunu foreach döngüsünün kapama süslüsü ------>
 
            </table>  
           
          </div>  
      </div>
      </div>


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © GDYAZILIM 2020</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Materialize css -->
    <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
