<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Personel Giriş</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../hnf.css'>
    <link rel="stylesheet" href="../lr.css">
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
    
  <div class="container">
        <section id="formHolder">
      
          <div class="row">
      
            <!-- Brand Box -->
            <div class="col-sm-6 brand">
                <ul>
                    <li><a href="index.html" class="logo" title="Özel Kırklareli Hastanesi Logosu"><img src="../social_media_icons/logo.png" alt="" width="250px" height="100px"></a></li>
                    <li><a href="https://saglik.gov.tr" target="_blank" title="Sağlık Bakanlığı Logosu"><img src="../social_media_icons/bakanlik_logo.png" alt="" style="width: 100px;height: 100px;"></a></li>
                </ul>
              
                
              <div class="heading">
                <h2>ÖZEL KIRKLARELİ HASTANESİ</h2>
                <p>Personel Giriş</p>
              </div>
            </div>
      
            <!-- Form Box -->
            <div class="col-sm-6 form">
      
              <!-- Login Form -->
              <div class="login form-peice">
                <form class="login-form" action="" method="post">
                  <div class="form-group">
                    <label for="loginemail">Email Adresi</label>
                    <input type="email" name="loginemail" id="loginemail" required>
                  </div>
      
                  <div class="form-group">
                    <label for="loginPassword">Şifre</label>
                    <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>
      
                  <div class="CTA">
                    <input type="submit" value="Giris Yap" name="giris">
                  </div>
                </form>
              </div><!-- End Login Form -->
            </div>
          </div>
          
      
        </section>
    </div>
    
<?php

    if(isset($_POST["giris"])){
        // --------------------------------------------------------------------
        // Kullabıcı girişine yazılan kod ile hiç bir bilgi içeriye alınmayacak 
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

        $email = test_input($_POST["loginemail"]);
        $sifre = test_input($_POST["loginPassword"]);

        // ------------------------------------------------------------------------------------
        $sql = "Select * from doktor";
        
        $result = mysqli_query($conn,$sql);

        $dogrulama = false;

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $doktorEmail = $row["doktor_eposta"];
                $doktorSifre = $row["doktor_sifre"];
                $doktorAd = $row["doktor_adi"];
                $doktorSoyad = $row["doktor_soyadi"];
                $doktorId = $row["doktor_id"];
                
                
                if($email == $doktorEmail && $sifre == $doktorSifre){
                    echo("<div class='alert alert-success' role='alert'>
                    Giriş Başarılı Siteye Yönlendiriliyorsunuz.
                </div>");

                    $dogrulama = true;

                    $_SESSION["doktor_eposta"] = $doktorEmail;
                    $_SESSION["doktor_adi"] = $doktorAd;
                    $_SESSION["doktor_soyadi"] = $doktorSoyad;
                    $_SESSION["doktor_id"] = $doktorId;

                    header("Refresh: 2; doktor_cevap.php");

                }
            }
            if($dogrulama == false){
                    echo("<div class='alert alert-danger' role='alert'>
                        Hatalı Giriş Yaptınız Lütfen Tekrar Deneyiniz.
                    </div>");
                    header("Refresh: 2; ../loginRegisterScreen.html");
            }
            
            
        }

        // ---------------------------------------------------------------------------------------
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
<script src="../preloader.js"></script>
</body>
</html>