<?php 
include 'baglanti.php';

             $urunid= $_GET["urunid"];
             $sorgu=$vt ->prepare("SELECT * FROM stok Where urunid = :urunid");
             $sorgu->execute(array(":urunid" => $urunid));
             $row = $sorgu -> fetch(PDO::FETCH_ASSOC);
            
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
         fieldset 
  {
    border: 1px solid #ddd !important;
    margin: 0;
    xmin-width: 0;
    padding: 10px;       
    position: relative;
    border-radius:4px;
    background-color:#f5f5f5;
    padding-left:10px!important;
    text-align: left;
  } 
  
    legend
    {
      text-align:center;
      font-size:14px;
      font-weight:bold;
      margin-bottom: 0px; 
      width: 35%; 
      border: 1px solid #ddd;
      border-radius: 50px; 
      padding: 5px 5px 5px 10px; 
      background-color: #ffffff;
    }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary  text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Stok Programı</a>
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
<br><br><br><br>  
<center>
<fieldset class="col-md-6">
    <legend><h3>STOK UYGULAMASI</h3></legend>
<!-------------------------- Form Başlangıç ------------------------------>
    <form action="update.php" method="POST">
    <div class="control-group container-sm">
      <?php 
      session_start();
      $_SESSION['urunid']   = $row['urunid'];
       ?>
<b>Ürün ID :</b> <input type="text" name="urunid" value="<?php  echo $row['urunid']; ?>" disabled=""><br>
<b>Ürün Kodu :</b><br><br><input type="text" name="urunkodu" value="<?php echo $row['urunkodu']; ?>"><br>
<b>Ürün Adı :</b> <input type="text" name="urunadi" value="<?php  echo $row['urunadi']; ?>"><br>
<b>Fiyat  :</b> <input type="text" name="fiyat" value="<?php echo $row['fiyat']; ?> "><br>
<b>Stok Durumu :</b><br><br><input type="text" name="stokdurumu" value="<?php echo $row['stokdurumu']; ?> "><br>
<b>Stok Adet :</b> <input type="text" name="stokadet" value="<?php echo $row['stokadet']; ?> "><br>
<b>Özellikleri :</b> <br><br>


  <textarea class="form-control" name="ozellikleri" rows="8"><?php echo $row['ozellikleri']; ?></textarea>


</label><br><br><br>

<!-------------------------- Butonlar ------------------------->
         <button type="submit" class="btn btn-secondary">GÜNCELLE</button>
        <button type="reset" class="btn btn-secondary">TEMİZLE</button>
    </div>
</form>
  
		</fieldset></center>
<br><br><br><br>


        
       
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

