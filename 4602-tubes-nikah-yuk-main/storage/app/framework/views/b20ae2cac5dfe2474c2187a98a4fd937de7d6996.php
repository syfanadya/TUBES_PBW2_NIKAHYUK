

<?php $__env->startSection('content'); ?>

 <div class="home-text">
        <pre class="pre1">
        Jadikan
        Momen Bahagiamu
        Lebih Spesial
        Dengan Undangan
        Pernikahan Digital !!
      </pre>
        <pre class="pre2">
        Undangan pernikahan digital memungkinkan
        kamu untuk mengirim undangan ke seluruh
        dunia tanpa batasan jarak dan waktu.
      </p>
      </pre>
    </div>




    <section class="hero" id="home">
        <main class="content">
            <img class="img-home1" src="./asetdashboard/home-1.png" alt="">
            <img class="img-home2" src="./asetdashboard/home-2.png" alt="">
        </main>
    </section>

    <!-- mengapa ny start -->

    <section id="mengapa" class="mengapa">
        <div class="mengapa-slide">
            <pre class="mengapa-pre1">
Mengapa Menggunakan
Undangan Digital
        </pre>

            <img class="img-mengapa1" src="./asetdashboard/mengapa1.png" alt="">
            <p class="mengapa-p1">Praktis</p>
            <pre class="mengapa-pre2">
Kamu dapat memesan undangan kapan saja dan 
di mana sajahanya melalui ponsel, dengan
 memasukkan data yang diperlukan,
dan undangan siap untuk dibagikan.
        </pre>
        </div>

        <!-- ===================================================================== -->

        <div class="mengapa-slide">
            <pre class="mengapa-pre1">
Mengapa Menggunakan 
Undangan Digital
        </pre>

            <img class="img-mengapa1" src="./asetdashboard/mengapa2.png" alt="">
            <p class="mengapa-p1">Ramah Lingkungan </p>
            <pre class="mengapa-pre2">
Kamu bisa mengurangi limbah sampah plastik 
dan kertas dengan menggunakan undangan 
berbasis website.  
        </pre>
        </div>

        <!-- ===================================================================== -->

        <div class="mengapa-slide">
            <pre class="mengapa-pre1">
Mengapa Menggunakan
Undangan Digital
        </pre>

            <img class="img-mengapa1-slide3" src="./asetdashboard/mengapa3.png" alt="">
            <p class="mengapa-p1">Hemat Biaya dan Waktu </p>
            <pre class="mengapa-pre2">
Undangan pernikahan digital memungkinkan kamu 
untuk  mengirim undangan kepada tamu 
undangan tanpa batas.  
        </pre>
        </div>

        <button id="prevButton" class="prevButton"><img src="./asetdashboard/left2.png" alt=""></button>
        <button id="nextButton" class="nextButton"><img src="./asetdashboard/right.png" alt=""></button>

    </section>
    <!-- mengapa ny end -->


    <!-- katalog start -->
    <section id="katalog" class="katalog">

        <div class="pembungkus">
            <p class="katalog-text">Katalog Desain Undangan</p>
            <div class="content">
                <div class="container-katalog">
                    <p class="title-katalog">Classic</p>
                    <img class="img-katalog" src="./asetdashboard/des1.png" alt="">
                    <a class="target-katalog" href="/home/desain1">LIHAT DETAIL</a>
                </div>
                <div class="container-katalog">
                    <p class="title-katalog">Blue Blossom</p>
                    <img class="img-katalog" src="./asetdashboard/des2.png" alt="">
                    <a class="target-katalog" href="/home/desain2">LIHAT DETAIL</a>
                </div>
                <div class="container-katalog">
                    <p class="title-katalog">Golden</p>
                    <img class="img-katalog" src="./asetdashboard/des3.png" alt="">
                    <a class="target-katalog" href="/home/desain3">LIHAT DETAIL</a>
                </div>
            </div>
    </section>
    <!-- katalog end -->



    <!-- komentar start -->
    <section id="komentar" class="komentar">
        <div class="title">
            <h2>Komentar</h2>
        </div>
        <div class="container" data-aos="fade-up">

            <header class="section-header">


                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

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
                $sql = "SELECT 
                        id_komentar,  
                        nama,
                        komentar
                        FROM komentar
                        ORDER BY id_komentar DESC";
                $result = mysqli_query($conn, $sql);
                $nomor = 0;
                while ($row = mysqli_fetch_array($result)) {
                $nomor++;
                ?>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>

                                <div class="profile mt-auto">
                                    <h3><?php echo $row[1]; ?></h3>
                                    <p>
                                        <?php echo $row[2]; ?>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <?php
                }
                ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

        </div>

    </section>
    <!-- komentar end -->


    <!-- pertanyaan start -->
    <section id="pertanyaan" class="pertanyaan">
        <div class="tanya">
            <p class="pertanyaan-title">Pertanyaan</p>
            <div class="box">
                <div class="box-pertanyaan">
                    <p class="ditanya">Bagaimana cara memesan undangan ? </p>
                    <p class="jawab">Silahkan registrasi dan login terlebih dahulu, lalu lihat desain-desain
                        menarik dikatalog , pilih salah satu lalu pesan akan diarahkan mengisi data-data,
                        setelah mengirim data lakukan pembayaran yang sudah tertera, sesudah pembayaran sukses
                        tunggu pesanan anda beberapa hari setelah pembayaran.
                    </p>
                </div>
                <div class="box-pertanyaan">
                    <p class="ditanya">Apakah undangan dapat di revisi jika ada perubahan ? </p>
                    <p class="jawab">Ya, undangan bisa direvisi melalui chat customer servise/whatsapp tertera.</p>
                </div>
                <div class="box-pertanyaan">
                    <p class="ditanya">Berapa lama masa aktif undangan website ? </p>
                    <p class="jawab">Undangan website tetap aktif walaupun acara pernikahan sudah selesai, aktif 3-5
                        tahun kedepan setelah pesanan undangan nikah digital selesai.</p>
                </div>
                <div class="box-pertanyaan">
                    <p class="ditanya">Bagaimana cara membagikan undangan kepada tamu undangan ? </p>
                    <p class="jawab">Sesudah pesanan undangan anda selesai kami akan mengirim berupa link website
                        udangan digital yang dipesan, anda hanya menyebarkan link undangan pernikahan dengan handphone
                        melalui media sosial seperti whatsapp, facebook, instagram, dll.</p>
                </div>

            </div>
            <a href="#"><i data-feather="arrow-up"></i></a>
        </div>
    </section>
    <!-- pertanyaan end -->




    <script>
    feather.replace()
    </script>
    <script>
        var slides = document.getElementsByClassName("mengapa-slide");
var currentSlide = 0;
var slideInterval; // Variabel untuk menyimpan interval
var delay = 7000; // Jeda waktu (dalam milidetik) sebelum melanjutkan slide otomatis

function showSlide(slideIndex) {
  // Sembunyikan semua slide
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Tampilkan slide yang dipilih
  slides[slideIndex].style.display = "block";
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length; // Periksa apakah sudah mencapai slide terakhir
  showSlide(currentSlide);
}

function startSlideshow() {
  if (!slideInterval) {
    slideInterval = setInterval(nextSlide, 4000); // Ubah slide setiap 2 detik (sesuaikan dengan kebutuhan Anda)
  }
}

function stopSlideshow() {
  clearInterval(slideInterval); // Hentikan perubahan slide otomatis
  slideInterval = null; // Set slideInterval menjadi null setelah dihentikan
  setTimeout(startSlideshow, delay); // Lanjutkan slide otomatis setelah jeda waktu
}

function previousSlide() {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length; // Periksa apakah sudah mencapai slide pertama
  showSlide(currentSlide);
}

showSlide(currentSlide); // Menampilkan slide pertama saat halaman dimuat
startSlideshow(); // Memulai perubahan slide otomatis

var nextButton = document.getElementById("nextButton");
var prevButton = document.getElementById("prevButton");

nextButton.addEventListener("click", nextSlide);
prevButton.addEventListener("click", previousSlide);

nextButton.addEventListener("click", function () {
  nextSlide();
  stopSlideshow(); // Berhenti saat tombol "Next" diklik
  setTimeout(startSlideshow, delay); // Lanjutkan slide otomatis setelah jeda waktu
});

prevButton.addEventListener("click", function () {
  previousSlide();
  stopSlideshow(); // Berhenti saat tombol "Previous" diklik
  setTimeout(startSlideshow, delay); // Lanjutkan slide otomatis setelah jeda waktu
});

// toggle class active
const navbarNav = document.querySelector(".navbar-nav, .navbar-nav-home");
// ketika hamburger-menu diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik di luar site bar untuk menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  var scrollPosition = window.scrollY;

  if (scrollPosition > 0) {
    navbar.classList.add("navbar-scrolled");
  } else {
    navbar.classList.remove("navbar-scrolled");
  }
});

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Freelance\4602-tubes-nikah-yuk\4602-tubes-nikah-yuk-main\resources\views/home.blade.php ENDPATH**/ ?>