<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Online Randevu</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='E-Randevu.css'>
    <script src='E-Randevu.js'></script>
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="JQuery/jquery validation/lib/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="JQuery/jquery-3.6.1.min.map"></script>
    <link rel="stylesheet" href="../../icofont/icofont.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">


    <link rel='stylesheet' type='text/css' media='screen' href='../../hnf.css'>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        
    .hasterror{
        font-size: 14px;
        
        display: block;
        color:red;
    }
    </style>
</head>
<body>

<?php ob_start(); session_start();?>

<div class="preloader"></div>
    
  <header class="topbar">
    <div class="container">
      <div class="row">
        <!-- social icon-->
        <div class="col-sm-12">
            <ul class="social-network">
                <li><a class="waves-effect waves-dark" href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjcwMzQ2NTkyLCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a class="waves-effect waves-dark" href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a class="waves-effect waves-dark" href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a class="waves-effect waves-dark" href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
    
            <ul class="phone">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="color: white;height: 32px;">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg></li>
                <li><a href="#" style="color: white;"><i>0850 850 8580</i></a></li>
            </ul>
  
        </div>
      </div>
    </div>
  </header>

  <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <a class="navbar-brand" href="../../index.html" title="Özel Kırklareli Hastanesi Logosu"><img src="../../social_media_icons/logo.png" alt="" style="width: 270px;height: 100px;margin: 0;padding: 0;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../index.html" style="color: white;">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Doktorlar/hakkımızda.html" style="color: white;">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Hastanelerimiz/hastaneler.html" style="color: white;">Hastanelerimiz</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../Doktorlar/Doktorlar.html" style="color: white;">Doktorlarımız</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            Polikliniklerimiz
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../../Poliklinikler/üroloji.html">Üroloji</a>
            <a class="dropdown-item" href="../../Poliklinikler/BeslenmeVeDiyet.html">Beslenme ve Diyet</a>
            <a class="dropdown-item" href="../../Poliklinikler/RuhSağlığıVeHastalıkları.html">Ruh Sağlığı ve Hastalıkları</a>
            <a class="dropdown-item" href="../../Poliklinikler/KlinikPsikolog.html">Klinik Psikolog</a>
            <a class="dropdown-item" href="../../Poliklinikler/Algoloji.html">Algoloji</a>
            <a class="dropdown-item" href="../../Poliklinikler/KulakBurunBoğazHastalıkları.html">Kuluk Burun Boğaz Hastalıkları</a>
            <a class="dropdown-item" href="../../Poliklinikler/nöroloji.html">Nöroloji</a>
            <a class="dropdown-item" href="../../Poliklinikler/BeyinVeSinirCerrahisi.html">Beyin ve Sinir Cerrahisi</a>
            <a class="dropdown-item" href="../../Poliklinikler/GenelCerrahi.html">Genel Cerrahi</a>
            <a class="dropdown-item" href="../../Poliklinikler/kardiyoloji.html">Kardiyoloji</a>
            <a class="dropdown-item" href="../../Poliklinikler/dahiliye.html">Dahiliye</a>
            <a class="dropdown-item" href="../../Poliklinikler/AcilServis.html">Acil Servis</a>
            <a class="dropdown-item" href="../../Poliklinikler/FizikTedaviVeRehabilitasyon.html.html">Fizik Tedavi ve Rehabilitasyon</a>
            <a class="dropdown-item" href="../../Poliklinikler/biorezonans.html">Biorezonans</a>
            <a class="dropdown-item" href="../../Poliklinikler/CocukSaglıgıVeHastalıkları.html">Çocuk Sağlığı ve Hastalıkları</a>
            <a class="dropdown-item" href="../../Poliklinikler/GozHastalıkları.html">Göz Hastalıkları</a>    
        </li>
      </ul>
      
    </div>  
    
    <div class="profileImage">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="50" height="50" class="rounded-circle">
              <p class="profileName"><?php echo("$_SESSION[hasta_adi] $_SESSION[hasta_soyadi]"); ?></p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../../php/userAccountInfo.php">Hesap Ek Bilgilerini Güncelle</a>
              <a class="dropdown-item" href="../../Hastanelerimiz/Hasta_islemleri.php">Hasta İşlemlerine Git</a>
              <a class="dropdown-item" href="../../php/userMessageBox.php">Mesajlar</a>
              <a class="dropdown-item" href="../../index.html">Çıkış Yap</a>
            </div>
          </li>   
        </ul>
    </div>


  </nav>



<div class="container-fluid">
  <div class="cover">
  </div>
</div>




        <div class="main-content-bg" >
            <div class="container main-content  " style="width: 950px;" >
              <div class="main-head" style="margin: 20px;">
              <h1>E-RANDEVU / HASTANE RANDEVU</h1>
              <hr>
                  <p style="color:white;font-weight: 800; font-size:20px;letter-spacing:0px;">Kırklareli Özel Hastanesi Hizmetleri, Tüm Branşlarda SGK Anlaşmalıdır.</p>
                  <ol class="breadcrumb main-head li">
                      <li><a href="HastaneRandevu.html" style="color:white; font-weight: 800;padding-right: 10px;text-decoration: none;font-size: 15px;">Anasayfa</a></li>
                      <li><a>  E-Randevu / Hastane Randevu</a></li>
                  </ol>
              </div>
            </div> 
          </div>
        
            
          <div class="container bg-white p-5" style="margin-top: -50px;  width: 950px;">
          <form id="form1" name="form1" method="POST" action = "">
            <?php $hastaneError = "";?>
            <?php


              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (isset($_POST["btn"])) {
                      $hastane = $_POST["hastane"];
                      
                      if ($hastane == "") {
                          $hastaneError = "Lütfen Hastane Seçiniz.";
                      } else {
                          $_SESSION["hastane_id"] = $hastane;
                          header("Location: E-Randevu1.php");
                          exit;
                      }
                  }
              }
              ?>
            
              <div class="form-group-center  col-sm-12 col-md-12 col-lg-8 m-5 "  >
                <label for="hastane" style="font-size: 20px; font-weight: 500; " >Randevu almak istediğiniz hastaneyi seçiniz:</label>
                <select class="form-control" style="padding: 20px; font-size: 16px; font-weight: 500;" id="hastane" name="hastane" >
                  <option value="">Hastane Seçiniz</option>
                  <option value="1">LÜLEBURGAZ ÖZEL HASTANESİ</option>
                  <option value="2">BABAESKİ ÖZEL HASTANESİ</option>
                  <option value="3">PINARHİSAR ÖZEL HASTANESİ</option>
                  <option value="4">DEMİRKÖY ÖZEL HASTANESİ</option>
                  <option value="5">VİZE ÖZEL HASTANESİ</option>
                </select>
  
                <span class ="hasterror"><?php echo $hastaneError?></span>
    
            </div>
            

              <button  type="submit" name="btn" class="btn btn-primary "  id="btn"  style="padding: 8px 30px; font-size: 20px; margin-left: 40px; ">Devam</button>
 
          </form>
          

        </div>

          
        

        <footer> 
          <div class="container-fluid" style="background-color: #2D2D2D;">
            <div class="row">
              <div class="col">
                <a href="../../index.html" class="logo" title="Özel Kırklareli Hastanesi Logosu"><img src="../../social_media_icons/logo.png" alt="" width="350px" height="150px" style="margin-top: 50px;"></a>
              </div>
              <div class="col">
                <h3 style="color: white;margin-top: 50px;">Faydalı Linkler</h3>
                <ul class="faydaliLink">
                  <li><a href="https://giris.turkiye.gov.tr/Giris/" style="color: white;text-decoration: none;" target="_blank"><i>E-Devlet</i></a></li>
                  <li><a href="https://enabiz.gov.tr" style="color: white;text-decoration: none;" target="_blank"><i>E-Nabız</i></a></li>
                  <li><a href="https://www.sgk.gov.tr" style="color: white;text-decoration: none;" target="_blank"><i>SGK</i></a></li>
                </ul>
              </div>
              <div class="col">
                <h3 style="color: white;margin-top: 50px;">Sosyal Medya</h3>
                <ul class="social-network">
                  <li><a class="waves-effect waves-dark" href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjcwMzQ2NTkyLCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="waves-effect waves-dark" href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="waves-effect waves-dark" href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li><a class="waves-effect waves-dark" href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <div class="col">
                <h3 style="color: white;margin-top: 50px;">İletişim</h3>
                <p style="color:white;">Yayla, 3. Çamlık Sk. 49/1, 39000 Merkez/Kırklareli Merkez/Kırklareli</p>
                <ul class="phoneFooter">
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="color: white;height: 32px;">
                      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg><a href="#" style="color: white;text-decoration: none;"><i>0850 850 8580</i></a></li>
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="color: white;">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg><a href="#" style="color: white;text-decoration:none;"><i> kırklareliozelhastanesi@gmail.com</i></a></li>                 
                </ul> 
              </div>
            </div>
          </div>
            
        </footer>
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="lr.js"></script>
  <script src = "HastaneRandevu.js"></script>
      <script src="Bootstrap/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>

  
      



  






    <script src="Bootstrap/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../../preloader.js"></script>
    
</body>
</html>