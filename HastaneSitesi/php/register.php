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

if(isset($_POST["kayit"])){
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

    
    $ad = test_input($_POST["ad"]);
    $soyad = test_input($_POST["soyad"]);
    $email = test_input($_POST["emailAdress"]);
    $tcKimlik = test_input($_POST["identitiyNumber"]);
    $sifre = test_input($_POST["password"]);

    // ------------------------------------------------------------------------------------
    $sql = "INSERT INTO hastalar (`hasta_adi`, `hasta_soyadi`, `hasta_eposta`, `hasta_TC`, `hasta_sifre`) VALUES
        (?,?,?,?,?)";
    
    $sql2 = "Select * from hastalar";
    $hastaKayitlar = mysqli_query($conn,$sql2);

    $stmt = mysqli_prepare($conn,$sql);
    // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
    mysqli_stmt_bind_param($stmt, "sssss", $ad, $soyad,$email,$tcKimlik,$sifre);
    // sorgu çalıştır
    
    $kayitlar = mysqli_stmt_get_result($stmt);
    // ---------------------------------------------------------------------------------------
    
    $kayitMevcut = false;

    if(mysqli_num_rows($hastaKayitlar) > 0){
        while($row = mysqli_fetch_assoc($hastaKayitlar)){
            $kullaniciEmail = $row["hasta_eposta"];
            $kullaniciTC = $row["hasta_TC"];

            if($kullaniciEmail == $email || $kullaniciTC == $tcKimlik){
                echo("<div class='alert alert-danger' role='alert'>
                    Bu Email veya TC Kimlik ile Daha Önceden Kayıt Oluşturulmuş Lütfen Tekrar Deneyiniz.
                </div>");
                header("Refresh: 2; ../loginRegisterScreen.html");
                $kayitMevcut = true;
            }
        }
    }

    if($kayitMevcut == false){
        $result = mysqli_stmt_execute($stmt);
        
        if($result){    
            echo("<div class='alert alert-success' role='alert'>
                Kaydınız Başarılı Bir Şekilde Oluşturulmuştur.
              </div>");
            session_start();
            $_SESSION["hasta_adi"] = $ad;
            $_SESSION["hasta_soyadi"] = $soyad;
            $_SESSION["hasta_eposta"] = $email;
            header("Refresh: 2; userAccountInfo.php");
        }
        else{
            echo("<div class='alert alert-danger' role='alert'>
                    Kayıt Oluşturulurken Bir Hata Meydana Geldi.
                </div>");
            header("Refresh: 2; ../loginRegisterScreen.html");
        }
    }
    
}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>