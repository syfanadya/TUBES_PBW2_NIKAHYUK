<html>
    <head>
        @if ($title)
                <title>{{ $title }}</title>
        @else
                <title>Example Laravel App</title>
        @endif

         <link rel="stylesheet" href="{{ asset('css/style.css') }}">
         <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body class="body-home-page">
        <nav class="navbar">
            <a href="#" class="navbar-logo"><img src="./asetdashboard/logo.png" alt="" /></a>

            <div class="navbar-nav">
                <a href="#mengapa">Mengapa Ny</a>
                <a href="#katalog">Katalog</a>
                <a href="#komentar">Komentar</a>
                <a href="#pertanyaan">Pertanyaan</a>
            </div>

            <div class="navbar-extra">
                <a href="/login">Masuk</a>
                <a href="/register" class="sign-up">Daftar</a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        
         @yield('content')
    </body>
</html>
    