<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Giriş Kontrol</title>
</head>
<body>
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
    $sql = "Select * from hastalar";
    
    $result = mysqli_query($conn,$sql);

    $dogrulama = false;

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $kullaniciEmail = $row["hasta_eposta"];
            $kullaniciSifre = $row["hasta_sifre"];

            $girilenSifre = hash('sha512', $sifre);
            
            if($email == $kullaniciEmail && $girilenSifre == $kullaniciSifre){
                echo("<div class='alert alert-success' role='alert'>
                Giriş Başarılı Siteye Yönlendiriliyorsunuz.
              </div>");

                $dogrulama = true;

                session_start();
                $_SESSION["hasta_adi"] = $row["hasta_adi"];
                $_SESSION["hasta_soyadi"] = $row["hasta_soyadi"];
                $_SESSION["hasta_eposta"] = $email;
                header("Refresh: 2; ../Hastanelerimiz/Hasta_islemleri.php");

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>