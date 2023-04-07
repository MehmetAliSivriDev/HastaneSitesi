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
    
    // ifademiniz hazırlıyoruz. parse edilir ve DB sunucu saklanır. Tekrar tekrar kullanılabilir
    
    $stmt = mysqli_prepare($conn,$sql);
    // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
    mysqli_stmt_bind_param($stmt, "sssss", $ad, $soyad,$email,$tcKimlik,$sifre);
    // sorgu çalıştır
    $result = mysqli_stmt_execute($stmt);
    $kayitlar = mysqli_stmt_get_result($stmt);
    // ---------------------------------------------------------------------------------------
    function Yonlendir($url,$zaman = 0){
        if($zaman != 0){
        header("Refresh: $zaman; url=$url");
        }
        else header("Location: $url");
        }
    
    if($result){
        session_start();
        $_SESSION["hasta_adi"] = $ad;
        $_SESSION["hasta_soyadi"] = $soyad;
        $_SESSION["hasta_eposta"] = $email;
        header("location:userAccountInfo.php");
    }
    else{
        Yonlendir("../loginRegisterScreen.html");
    }
}

?>