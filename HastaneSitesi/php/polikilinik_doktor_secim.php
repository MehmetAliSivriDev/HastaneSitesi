<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polikilinik - Doktor Seçim</title>
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

$poliForm=$_POST['poliForm'];

$sql = "INSERT INTO polikilinik ('polikilinik_adi') VALUES (?)";

$sql2 = "SELECT * FROM polikilinik";
$polikilinik_kayitlar = mysqli_query($conn,$sql2);

$stmt = mysqli_prepare($conn,$sql);
    
    mysqli_stmt_bind_param($stmt, "s", $poliForm);
    



}








    ?>

    
</body>
</html>