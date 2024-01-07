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
 //memasukkan file ke dalam program yang hanya dilakukan sekali pemasukan file

if (!isset($_FILES['bukti_pembayaran']) || $_FILES['bukti_pembayaran']['error'] !== 0) {
    echo "<p>Isian tidak boleh kosong.</p>";
    exit();
} else {
    $tmp_name = $_FILES['bukti_pembayaran']['tmp_name'];
    $file_name = $_FILES['bukti_pembayaran']['name'];
    $destination_folder = 'buktipembayaran/';
    $destination = $destination_folder . $file_name;

    // Cek apakah file dengan nama yang sama sudah ada di folder tujuan
    if (file_exists($destination)) {
        $path_parts = pathinfo($file_name);
        $extension = $path_parts['extension'];
        $file_name_without_ext = $path_parts['filename'];

        $counter = 1;
        while (file_exists($destination)) {
            // Tambahkan angka increment ke nama file
            $new_file_name = $file_name_without_ext . '_' . $counter . '.' . $extension;
            $destination = $destination_folder . $new_file_name;
            $counter++;
        }

        // Pindahkan file yang diupload ke tujuan dengan nama baru yang sudah ditambahkan increment
        if (move_uploaded_file($tmp_name, $destination)) {
            $bukti_pembayaran_name = $new_file_name; // Simpan nama file baru dalam variabel yang sesuai
        } else {
            // Gagal mengunggah file
        }
    } else {
        // Pindahkan file yang diupload ke tujuan tanpa perubahan nama
        if (move_uploaded_file($tmp_name, $destination)) {
            $bukti_pembayaran_name = $file_name; // Simpan nama file dalam variabel yang sesuai
        } else {
            // Gagal mengunggah file
        }
    }
}

$sql = "INSERT INTO pembayaran (
            iduser, 
            tanggal, 
            bukti_pembayaran,
            status_pembayaran)
        VALUES (
            '$_SESSION[iduser]',
            NOW(),
            '$bukti_pembayaran_name', 
            'Belum Terverifikasi')"; 

if (mysqli_query($conn,$sql)) {
    header("refresh:3;url=statuspembayaran");
} else {
    echo "<p> Ups, upload gagal :(</p>";
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

</html><?php /**PATH C:\Freelance\4602-tubes-nikah-yuk\4602-tubes-nikah-yuk-main\resources\views/prosespembayaran.blade.php ENDPATH**/ ?>