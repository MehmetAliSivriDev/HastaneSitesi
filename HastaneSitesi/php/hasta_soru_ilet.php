<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Hastalar</title>
</head>
<body style="margin-top: 50px;">
<div class="container">
    <div class="row">
        <?php 
        if(isset($_POST["gonder"])){
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
               

            $hasta_eposta = test_input($_POST["email"]);
            $poliklinik = test_input($_POST["poliForm"]);
            $soru = test_input($_POST["message"]);
            // ------------------------------------------------------------------------------------
            $sql = "INSERT INTO hasta_soru (`hasta_eposta`, `poliklinik`, `soru`) VALUES
                (?,?,?)";
            
            $hastaSql = "Select * from hastalar";
    
            $hastaSonuc = mysqli_query($conn,$hastaSql);

            $hastaEpostaKontrol = true;

            if(mysqli_num_rows($hastaSonuc) > 0){
                while($row = mysqli_fetch_assoc($hastaSonuc)){
                    $veriHastaEposta = $row["hasta_eposta"];

                    if($hasta_eposta != $veriHastaEposta){
                        $hastaEpostaKontrol = false;
                    }
                    else{
                        $hastaEpostaKontrol = true;
                    }
                
                }
            }



            // ifademiniz hazırlıyoruz. parse edilir ve DB sunucu saklanır. Tekrar tekrar kullanılabilir
            $bosKontrol = true;

            if($hasta_eposta == "" || $soru == "" || $poliklinik == 0){

                echo("<div class='alert alert-danger' role='alert'>
                Lütfen Tüm İstenenleri Doldurunuz Boş Bırakmayınız.
              </div>");

              header("Refresh: 2; ../index.html");


            }
            else
            {

                if($hastaEpostaKontrol == false){

                
                    echo("<div class='alert alert-danger' role='alert'>
                    Girdiğiniz Eposta Geçersiz Lütfen Hastanemize Online Randevu Alma Kısmından Kayıt Olun.\n
                    Ve Tekrar Deneyin.
                  </div>");
    
                  header("Refresh: 4; ../index.html");
    
                }
                else{
                    $stmt = mysqli_prepare($conn,$sql);
                    // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
                    mysqli_stmt_bind_param($stmt, "sss", $hasta_eposta,$poliklinik,$soru);
                    // sorgu çalıştır
                    mysqli_stmt_execute($stmt);

                
                    $result = mysqli_stmt_get_result($stmt);

                    // ------------------------------------------------------------------burya doktor siteden mesaj ile geri donsun yada arasın hastasını
                    if($result == false){
                    
                            //buraya alert olarak aranacagınız yaz yada doktor mesajlaşması için bişiler  yap
                        echo("<div class='alert alert-success' role='alert'>
                        İletiniz başarı ile gönderilmiştir. Doktorlarımız en kısa sürede size ulaşacaktır.
                    </div>");
                        
                    header("Refresh: 2; ../index.html");

                    }
                    else{
                        echo("<div class='alert alert-danger' role='alert'>
                        Hata Meydana Geldi.
                    </div>");

                    header("Refresh: 2; ../index.html");
                    }
                }
                
            }


            

        }

        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>