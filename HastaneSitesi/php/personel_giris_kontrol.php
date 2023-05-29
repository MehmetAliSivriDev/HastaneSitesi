<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Personel Giriş Kontrol</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<?php
    session_start();

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

                $girilenSifre = hash('sha512', $sifre);
                
                
                if($email == $doktorEmail && $girilenSifre == $doktorSifre){
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
                    header("Refresh: 2; personel_giris.php");
            }
            
            
        }

        // ---------------------------------------------------------------------------------------
    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>