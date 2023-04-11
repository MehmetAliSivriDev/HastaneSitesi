<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Seçim</title>
</head>
<body>
    
<?php
if(isset($_POST["Devam"])){
    
    function test_input($data){ 
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hastaneveritabani";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$new = mysqli_set_charset($conn, "utf8");
if($conn->connect_error){
    die("Bağlantı hatası: ".$conn->connect_error);
}

$hastane=$_POST['hastane'];

$sql = "INSERT INTO hastaneler ('hastane_adi') VALUES (?)";

$sql2 = "SELECT * FROM hastaneler";
$hastanekayitlari=mysqli_query($conn,$sql2);

$stmt = mysqli_prepare($conn,$sql);
    
    mysqli_stmt_bind_param($stmt, "s", $hastane);

$mevcutkayit = false;

if($mevcutkayit == false){
    $result = mysqli_stmt_execute($stmt);
    
    if($result){    
        echo("<div class='alert alert-success' role='alert'>
            Hastane Seçiminiz Başarılı Bir Şekilde Gerçekleşmiştir.
          </div>");
        session_start();
        $_SESSION["hastane_adi"] = $hastane;
        
        header("Refresh: 2; E-Randevu1.php");
    }
    else{
        echo("<div class='alert alert-danger' role='alert'>
                Hastane Seçimi Gerçekleştirirken Bir Hata Meydana Geldi.
            </div>");
        header("Refresh: 2; ../E-Randevu.php");
    }
}
}

?>

</body>
</html>

