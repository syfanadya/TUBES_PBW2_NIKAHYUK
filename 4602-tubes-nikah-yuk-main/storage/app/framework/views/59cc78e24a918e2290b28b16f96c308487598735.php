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

if (isset($_POST["submit"])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
     
        header("refresh:0;url=logingagal");
        exit();
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, admin FROM users WHERE email = '$email' AND password = MD5('$password')";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['iduser'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        if ($user['admin'] == 1) {
            // User is an admin
            $_SESSION['admin'] = true;
            header("refresh:3;url=admin");
        } else {
            // User is a regular user
            $_SESSION['admin'] = false;
            header("refresh:0;url=dashboard");
        }
    } else {
        header("refresh:0;url=logingagal");
    }
}
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
        <style>
            .input-group {
                position: relative;
                margin-bottom: 20px;
            }

            .input-group input {
                width: 100%;
                padding: 10px;
                font-size: 18px;
                border-radius: 5px;
                background-color: #ff849c;
            }

            .input-group .toggle-password {
                position: absolute;
                top: 50%;
                right: 16px;
                transform: translateY(-50%);
                cursor: pointer;
                transition: 0.3s ease-in-out;
            }

            .input-group .toggle-password:hover {
                transform: translateY(-50%) scale(1.1);
            }

            .input-group .toggle-password:focus {
                outline: none;
            }

            .input-group .toggle-password i {
                color: #999;
                font-size: 18px;
            }

            .input-group .toggle-password i:hover {
                color: #333;
            }
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
        <title>Login & Sign-Up</title>
    </head>
        <body>

    <div class="container">
        <form action="<?php echo e(url('/login')); ?>"  method="POST" class="login-email">
            <?php echo csrf_field(); ?> 
            <?php echo method_field('POST'); ?>
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Masuk</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Kata Sandi" name="password" id="password">
                <span class="toggle-password" onclick="togglePasswordVisibility()"><i class="fa fa-eye"></i></span>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn" value="Login">Masuk</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register">Daftar</a></p>
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
    </script>

</body>
</html>

<?php /**PATH D:\laragon\www\4602-tubes-nikah-yuk-main\resources\views/login.blade.php ENDPATH**/ ?>