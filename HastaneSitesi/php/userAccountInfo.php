<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hesap Bilgileri</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../hnf.css'>
    <script src='main.js'></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../icofont/icofont.min.css">

<style>
    body{
        background-image: url("https://st3.depositphotos.com/2065849/14683/i/450/depositphotos_146839819-stock-photo-blurred-hospital-hallway-unfocused-background.jpg");
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

</style>

</head>
<body>
  <?php  ob_start(); session_start();?>

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
          <a class="navbar-brand" href="../index.html" title="Özel Kırklareli Hastanesi Logosu"><img src="../social_media_icons/logo.png" alt="" style="width: 270px;height: 100px;margin: 0;padding: 0;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../index.html" style="color: white;">Anasayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Doktorlar/hakkımızda.html" style="color: white;">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Hastanelerimiz/hastaneler.html" style="color: white;">Hastanelerimiz</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../Doktorlar/Doktorlar.html" style="color: white;">Doktorlarımız</a>
              </li>
  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                  Polikliniklerimiz
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../Poliklinikler/üroloji.html">Üroloji</a>
                  <a class="dropdown-item" href="../Poliklinikler/BeslenmeVeDiyet.html">Beslenme ve Diyet</a>
                  <a class="dropdown-item" href="../Poliklinikler/RuhSağlığıVeHastalıkları.html">Ruh Sağlığı ve Hastalıkları</a>
                  <a class="dropdown-item" href="../Poliklinikler/KlinikPsikolog.html">Klinik Psikolog</a>
                  <a class="dropdown-item" href="../Poliklinikler/Algoloji.html">Algoloji</a>
                  <a class="dropdown-item" href="../Poliklinikler/KulakBurunBoğazHastalıkları.html">Kuluk Burun Boğaz Hastalıkları</a>
                  <a class="dropdown-item" href="../Poliklinikler/nöroloji.html">Nöroloji</a>
                  <a class="dropdown-item" href="../Poliklinikler/BeyinVeSinirCerrahisi.html">Beyin ve Sinir Cerrahisi</a>
                  <a class="dropdown-item" href="../Poliklinikler/GenelCerrahi.html">Genel Cerrahi</a>
                  <a class="dropdown-item" href="../Poliklinikler/kardiyoloji.html">Kardiyoloji</a>
                  <a class="dropdown-item" href="../Poliklinikler/dahiliye.html">Dahiliye</a>
                  <a class="dropdown-item" href="../Poliklinikler/AcilServis.html">Acil Servis</a>
                  <a class="dropdown-item" href="../Poliklinikler/FizikTedaviVeRehabilitasyon.html">Fizik Tedavi ve Rehabilitasyon</a>
                  <a class="dropdown-item" href="../Poliklinikler/biorezonans.html">Biorezonans</a>
                  <a class="dropdown-item" href="../Poliklinikler/CocukSaglıgıVeHastalıkları.html">Çocuk Sağlığı ve Hastalıkları</a>
                  <a class="dropdown-item" href="../Poliklinikler/GozHastalıkları.html">Göz Hastalıkları</a>    
              </li>
            </ul>
            
          </div>  
  
      </nav>
        
        <form action="" id="form" method="post">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"><span class="font-weight-bold"><?php echo("<b>$_SESSION[hasta_adi] $_SESSION[hasta_soyadi] </b>") ?></span><span class="text-black-50"><?php echo("$_SESSION[hasta_eposta]") ?></span><span> </span></div>
                    </div>
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Ek Hesap Bilgileri</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Telefon Numarası</label><input name="telefon" type="text" class="form-control" placeholder="Telefon Numarası (İsteğe Bağlı)" value=""></div>
                                <div class="col-md-12"><label class="labels">Adress</label><input name="adresBilgisi" type="text" class="form-control" placeholder="Adres Bilgileri (İsteğe Bağlı)" value=""></div>
                                <div class="col-md-12"><label class="labels">Doğum Yeri</label><input name="dogumYeri" type="text" class="form-control" placeholder="Doğum Yeri (İsteğe Bağlı)" value=""></div>
                                <div class="col-md-12"><label class="labels">Doğum Tarihi</label><input name="dogumTarihi" id="date" type="date" class="form-control tarih" placeholder="dd/mm/yyyy">
                                  <span id="dateError" class="dateError" style="color: red;"></span>
                                </div>
                                <div class="col-md-12"><label class="labels">Kan Grubu</label>
                                  <div class="form-group">
                                    <select class="form-control" id="kan" name="kanGrubu">
                                      <option value="">Kan Grubu Seçiniz</option>
                                      <option value="A+">A+</option>
                                      <option value="A-">A-</option>
                                      <option value="B+">B+</option>
                                      <option value="B-">B-</option>
                                      <option value="AB+">AB+</option>
                                      <option value="AB-">AB-</option>
                                      <option value="0+">0+</option>
                                      <option value="0-">0-</option>
                                    </select>
                                    <span id="kanError" class="kanError" style="color: red;"></span>
                                  </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Cinsiyet</label> <div class="form-group cinsiyet">
                                    <select class="form-control" id="cinsiyet" name="cinsiyet">
                                      <option value="sec">Cinsiyet Seçiniz</option>
                                      <option value="0">Erkek</option>
                                      <option value="1">Kız</option>
                                    </select>
                                    
                                </div><span id="cinsiyetError" class="cinsiyetError" style="color: red;"></span></div>
                                
                            <div class="mt-5 text-center"><button name="guncelle" class="btn btn-danger profile-button" type="submit">Profili Kaydet</button></div>
                        </div>
                    </div>
                    
                
                </div>
    
            </div>
            </div>
            </div>
        </form>


        
<!--------------------------------------------------------------------------------------------------------------->
        <?php 

            if(isset($_POST["guncelle"])){
              // --------------------------------------------------------------------
              function test_input($data){ 
                  $data = trim($data);
                  $data = stripcslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
              }
              // ---------------------------------------------------------------------

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "hastaneveritabani";


              //create connection 

              $conn = mysqli_connect($servername,$username,$password,$dbname);
              $new = mysqli_set_charset($conn, "utf8");
              if($conn->connect_error){
                  die("Bağlantı hatası: ".$conn->connect_error);
              }

              $hasta_adi =  $_SESSION["hasta_adi"];
              $hasta_soyadi = $_SESSION["hasta_soyadi"];
              $hasta_eposta = $_SESSION["hasta_eposta"]; 

              $telefon = test_input($_POST["telefon"]);
              $adres = test_input($_POST["adresBilgisi"]);
              $dogumYeri = test_input($_POST["dogumYeri"]);
              $dogumTarihi = test_input($_POST["dogumTarihi"]);
              $kanGrubu = test_input($_POST["kanGrubu"]);
              $cinsiyet = test_input($_POST["cinsiyet"]);

      backward:
              $kanError = true;
              $cinsiyetError = true;
              $dateError = true;

              if ($_SERVER["REQUEST_METHOD"] == "POST") {

                  if (empty($kanGrubu) ) {
                      echo '<script>document.getElementById("kanError").innerHTML = "Lütfen Kan Bilginizi Seçiniz!";</script>';
                      $kanError = true;
                  } else {
                      echo '<script>document.getElementById("kanError").innerHTML = "";</script>';
                      $kanError = false;
                  }

                  if ($cinsiyet == "sec") {
                      echo '<script>document.getElementById("cinsiyetError").innerHTML = "Lütfen Cinsiyet Bilginizi Seçiniz!";</script>';
                      $cinsiyetError = true;
                  } else {
                      echo '<script>document.getElementById("cinsiyetError").innerHTML = "";</script>';
                      $cinsiyetError = false;
                  }
                  
                  if (empty($dogumTarihi)) {
                      echo '<script>document.getElementById("dateError").innerHTML = "Lütfen Tarih Bilginizi Seçiniz!";</script>';
                      $dateError = true;
                  } else {
                      echo '<script>document.getElementById("dateError").innerHTML = "";</script>';
                      $dateError = false;
                  }

              }
              
              
              // ------------------------------------------------------------------------------------
                $sql = "UPDATE hastalar SET `hasta_cinsiyet` = '$cinsiyet', `hasta_telefon` = '$telefon', `hasta_dogum_tarihi` = '$dogumTarihi',
                `hasta_dogum_yeri` = '$dogumYeri', `hasta_adress` = '$adres', `hasta_kan` = '$kanGrubu' WHERE `hasta_eposta` = '$hasta_eposta'";
            
              
              $result = mysqli_query($conn,$sql);
              
              // ---------------------------------------------------------------------------------------

              if($result){
                echo("<div class='alert alert-success' role='alert'>
                  Bilgileriniz Başarılı Bir Şekilde Güncellenmiştir.
                </div>");
                $_SESSION["hasta_adi"] =  $hasta_adi;
                $_SESSION["hasta_soyadi"] = $hasta_soyadi;
                $_SESSION["hasta_eposta"] = $hasta_eposta;
                if ($kanError == false && $cinsiyetError == false && $dateError == false) {
                  header("Refresh: 2; ../HastaneRandevu/randevu_kismi/E-Randevu.php");
                }
                
                ob_end_flush();
              }
              else{
                echo("<div class='alert alert-danger' role='alert'>
                Bilgileriniz Güncellenirken Bir Hata Meydana Geldi.
                </div>");
                header("Refresh: 2; userAccountInfo.php");
              }
                
                
            }
        ?>


          <footer> 
            <div class="container-fluid" style="background-color: #2D2D2D;">
              <div class="row">
                <div class="col">
                    <a href="../index.html" class="logo" title="Özel Kırklareli Hastanesi Logosu"><img src="../social_media_icons/logo.png" alt="" width="350px" height="150px" style="margin-top: 50px;"></a>
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

          
      

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="../lr.js"></script>
<script src="../userAccountInfo.js"></script>
<script src="../preloader.js"></script>
</body>
</html>