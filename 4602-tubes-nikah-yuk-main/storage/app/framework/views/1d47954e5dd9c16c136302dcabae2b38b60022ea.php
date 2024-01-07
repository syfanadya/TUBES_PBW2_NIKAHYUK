<?php 
session_start();

if(!isset($_SESSION['iduser'])){
    header("refresh:3;url=login");
    echo "<h1>Silahkan login/masuk </h1>";
    die();
}
$server = "localhost";
$user = "root";
$pass = "";
$database = "nikah_yuk";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("Gagal tersambung dengan database: " . mysqli_connect_error());
    exit();
}

if (!isset($_POST['nama'])) {
    echo "<p>Nama tidak boleh kosong.</p>";
    exit();
}
if (!isset($_POST['komentar'])) {
    echo "<p>komen tidiak boleh kosong.</p>";
    exit();
}

$sql = "INSERT INTO komentar (
    iduser,
    nama,
    komentar)
    VALUES (
        '$_SESSION[iduser]',
        '$_POST[nama]',
        '$_POST[komentar]'
    )";
    
if (mysqli_query($conn, $sql)) {
    header("refresh:3;url=semuakomentar");
} else {
    echo "<p>Ups, data gagal disimpan:</p>";
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

</html> <?php /**PATH C:\Freelance\4602-tubes-nikah-yuk\4602-tubes-nikah-yuk-main\resources\views/proseskomen.blade.php ENDPATH**/ ?>