<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Doktor Mesaj</title>
</head>
<body style="margin-top: 50px;">
<div class="container">
    <div class="row">
        <?php 
        session_start();
        if(isset($_POST["cevap_submit"])){
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


            $hastaemail= test_input($_POST["hasta_eposta"]);
            $doktorcevap = test_input($_POST["cevap"]);
            $doktorEmail = $_SESSION["doktor_eposta"];
            $doktorId = $_SESSION["doktor_id"];
         
            // ------------------------------------------------------------------------------------
            $sql = "INSERT INTO doktor_cevap (`doktor_id`,`cevap`,`hasta_eposta`) VALUES
                (?,?,?)";
            
            $sql2 = "select * from doktor_cevap";
            // ifademiniz hazırlıyoruz. parse edilir ve DB sunucu saklanır. Tekrar tekrar kullanılabilir
            
            $stmt = mysqli_prepare($conn,$sql);
            // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
            mysqli_stmt_bind_param($stmt, "iss", $doktorId ,$doktorcevap,$hastaemail);
            // sorgu çalıştır
            mysqli_stmt_execute($stmt);

            $stmt2 = mysqli_prepare($conn,$sql2);
            // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
            //mysqli_stmt_bind_param($stmt, "ss",  $doktorcevap,$hastaemail);
            // sorgu çalıştır
            mysqli_stmt_execute($stmt2);

            $result = mysqli_stmt_get_result($stmt2);


            if(mysqli_num_rows($result) > 0){
                         
                    echo("<div class='alert alert-success' role='alert'>
                    İletiniz Başarıyla Gönderilmiştir.
                  </div>");
                   
            }
            else{
                echo "Hatalı Işlem Yaptınız Lütfen Tekrar Deneyiniz.";
            }

        }

        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>