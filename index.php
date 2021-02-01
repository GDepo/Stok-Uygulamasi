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
   <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" style="height:70px;" id="mainNav">
            <div class="container">
          <a class="navbar-brand js-scroll-trigger " href="https://gdyazılım.com" title="gdyazılım.com a gitmek için tıklayınız">GD YAZILIM</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded bg-info" type="button"  data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars" ></i></button>
                <div class="collapse navbar-collapse " id="navbarResponsive">
                    <ul class="navbar-nav ml-auto" style="background-color: #2c3e50;">
                        <li class="" ><a class="" href="index.php" style=" text-decoration: none; color:white;">ÜRÜN EKLE</a></li>
                        <li class=""><a class="" href="stok.php" style=" text-decoration: none; color:white;">STOK GÖRÜNTÜLE</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

<br><br><br><br><center>
<fieldset class="col-md-6">
    <legend ><h3>STOK UYGULAMASI</h3></legend>

    <form action="ekle.php" method="POST">
    <div class="control-group container-sm">
    
<b>Ürün Kodu :</b> <input type="text" name="urunkodu" required=""><br>
<b>Ürün Adı :</b> <input type="text" name="urunadi" required=""><br>
<b>Fiyat  :</b> <input type="text" name="fiyat" required=""><br>
<b>Stok Durumu :</b><br><br>
  <select class="form-control form-control" name="stokdurumu" required="">
  <option></option>
  <option>Var</option>
  <option>Yok</option>
</select><br>
<b>Stok Adet :</b> <input type="number" name="stokadet" required=""><br>
<b>Özellikleri :</b> <br><br>

  <textarea class="form-control" name="ozellikleri" rows="8" required=""></textarea>


</label><br><br><br>

<!-------------------------- Butonlar ------------------------->
        <button type="submit" class="btn btn-secondary" style="font-size:17px;">KAYDET</button>&nbsp;&nbsp;
        <button type="reset" class="btn btn-secondary" style="font-size:17px;">TEMİZLE</button>
        
    </div></center><br><br>
</form>
  
</fieldset>





      
       
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