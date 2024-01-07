<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
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
    <title>Login & Sign-Up</title>
</head>

<body>

    <div class="container">
        <form action="{{ url('/login') }}" method="POST" class="login-email">
             @csrf 
            @method('POST')
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
            <p style="color: red; margin-top: 1rem;" ;>Username atau Kata Sandi yang Anda masukkan salah.</p>
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