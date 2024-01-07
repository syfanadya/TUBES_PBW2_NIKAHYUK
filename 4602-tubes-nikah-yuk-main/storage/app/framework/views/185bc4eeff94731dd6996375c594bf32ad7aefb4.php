<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "nikah_yuk";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("Gagal tersambung dengan database: " . mysqli_connect_error());
    exit();
}
$sql = "UPDATE pesanan
        SET status_pesanan='$_POST[status_pesanan]', linkundangan='$_POST[linkundangan]'
        WHERE id_pesanan=$_GET[id]";

if (mysqli_query($conn,$sql)) {
    header( "refresh:2;url=admin" );
}
else {
    echo "<p> Ups, data gagal di edit :</p>";
}       

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    .loader-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .loader {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
</body>

</html><?php /**PATH D:\laragon\www\4602-tubes-nikah-yuk-main\resources\views/proseseditpesanan.blade.php ENDPATH**/ ?>