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
 
error_reporting(0);
 
session_start();
  
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("refresh:0;url=login");
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                
            } else {
                header("refresh:0;url=registergagal");
                // echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            header("refresh:0;url=registergagal");
            // echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        header("refresh:0;url=registergagal");
        // echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <style>
        .container {
    width: 400px;
    height: auto;
    min-height: 400px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    padding: 40px 30px;
    border: 0;
    margin-bottom: 0rem;
}
*{
        box-sizing: border-box;
}
body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/bg5.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

    </style>

    <title>Daftar</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <?php echo csrf_field(); ?> 
            <?php echo method_field('POST'); ?>
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Daftar</p>
            <div class="input-group">
                <input type="text" placeholder="Pengguna" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Kata Sandi" name="password" id="password"
                    value="<?php echo $_POST['password']; ?>" required>
                <span class="toggle-password" onclick="togglePasswordVisibility()"><i class="fa fa-eye"></i></span>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Konfirmasi Kata Sandi" name="cpassword" id="cpassword"
                    value="<?php echo $_POST['cpassword']; ?>" required>
                <span class="toggle-password2" onclick="toggleConfirmPasswordVisibility()"><i
                        class="fa fa-eye"></i></span>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Daftar</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login">Masuk</a></p>
        </form>
    </div>
    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var toggleIcon = document.querySelector(".toggle-password i");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }

    function toggleConfirmPasswordVisibility() {
        var confirmPasswordInput = document.getElementById("cpassword");
        var toggleIcon = document.querySelector(".toggle-password2 i");

        if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            confirmPasswordInput.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }
    </script>

</body>

</html><?php /**PATH C:\Freelance\4602-tubes-nikah-yuk\4602-tubes-nikah-yuk-main\resources\views/register.blade.php ENDPATH**/ ?>