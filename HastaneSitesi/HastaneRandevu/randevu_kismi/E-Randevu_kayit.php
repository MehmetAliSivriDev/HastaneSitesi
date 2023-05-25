<?php
    session_start();
    if(isset($_POST["saatGonder"])){
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
           
            //buraya id'ler cekilcek ...

        $hasta_eposta = $_SESSION["hasta_eposta"];

        $sql2 = "SELECT hasta_id from hastalar where hasta_eposta='$hasta_eposta'";

        $result2 = mysqli_query($conn,$sql2);

        while($row2 = $result2 ->fetch_assoc())
        { 
            $hasta_id = $row2["hasta_id"];

        }    

        $randevu_saati= test_input($_POST["saatGonder"]);
        $randevu_tarihi = test_input($_POST["randevutarih"]);
        $doktorId = $_SESSION["doktor"];
        $hastaId = $hasta_id;
        // ------------------------------------------------------------------------------------
        $sql = "INSERT INTO randevu_alma (`randevu_saati`,`randevu_tarihi`,`doktor_id`,`hasta_id`) VALUES
            (?,?,?,?)";
        
        // ifademiniz hazırlıyoruz. parse edilir ve DB sunucu saklanır. Tekrar tekrar kullanılabilir
        
        $stmt = mysqli_prepare($conn,$sql);
        // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
        mysqli_stmt_bind_param($stmt, "ssii", $randevu_saati ,$randevu_tarihi,$doktorId,$hastaId);
        // sorgu çalıştır
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);


        if($result == false){

            $sql3 = "UPDATE calisma_saati SET `doluMu` = 0 where `calisma_saati` = '$randevu_saati' and `calisma_tarihi` = '$randevu_tarihi'";

            $result3 = mysqli_query($conn,$sql3);
                     
                echo("<div class='alert alert-success' role='alert'>
                Randevunuz Başarı ile Alınmıştır.
              </div>");
              //header("Refresh: 2; E-Randevu.php");
               
        }
        else{
            echo "Hatalı Işlem Yaptınız Lütfen Tekrar Deneyiniz.";
        }

    }

?>

