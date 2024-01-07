<html>
    <head>
        <?php if($title): ?>
                <title><?php echo e($title); ?></title>
        <?php else: ?>
                <title>Example Laravel App</title>
        <?php endif; ?>

         <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
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
        
         <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
    <?php /**PATH D:\laragon\www\4602-tubes-nikah-yuk-main\resources\views/layouts/master.blade.php ENDPATH**/ ?>