<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desain 2</title>
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Italiana&family=Sacramento&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&display=swap");
* {
  margin: 0;
}

html {
  scroll-behavior: smooth;
}

body {
  height: 200rem;
}

.hero,
.slide2,
.slide3,
.slide4,
.slide5,
.slide6,
.slide7,
.slide8 {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-image: "url('<?php echo e(asset('assetswedding/bg.png')); ?>')";
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.content .toggleButton {
  position: fixed;
  z-index: 999999999999999999999999;
  color: #fff;
  right: 10rem;
  background-color: #ff849c;
  transition: 0.3s ease-in-out;
  border: none;
}

.content .toggleButton:hover {
  background-color: #93b9d8;
}

.content .kiriatas,
.slide2 .kiriatas,
.slide4 .kiriatas,
.slide6 .kiriatas,
.slide7 .kiriatas,
.slide8 .kiriatas {
  width: 220px;
  height: 200px;
  position: absolute;
  top: 0;
  left: 0;
  animation: slideLeft 0.8s ease forwards;
}

.content .kiritengah {
  bottom: 15rem;
}

.content .kiritengah,
.slide2 .kiritengah,
.slide4 .kiritengah,
.slide6 .kiritengah,
.slide7 .kiritengah,
.slide8 .kiritengah {
  width: 180px;
  height: 270px;
  position: absolute;
  left: 0;
  animation: slideLeft 0.8s ease forwards;
}

.content .kiribawah,
.slide2 .kiribawah,
.slide4 .kiribawah,
.slide6 .kiribawah,
.slide7 .kiribawah,
.slide8 .kiribawah {
  width: 276px;
  height: 179px;
  position: absolute;
  bottom: 0;
  left: 0;
  animation: slideLeft 0.8s ease forwards;
}

.content .tengahatas,
.slide2 .tengahatas,
.slide4 .tengahatas,
.slide6 .tengahatas,
.slide7 .tengahatas,
.slide8 .tengahatas {
  width: 275px;
  height: 128px;
  position: absolute;
  top: 0;
  right: 15rem;
  animation: slideBottom 0.8s ease forwards;
}

.content .kananatas,
.slide2 .kananatas,
.slide4 .kananatas,
.slide6 .kananatas,
.slide7 .kananatas,
.slide8 .kananatas {
  width: 245px;
  height: 192px;
  position: absolute;
  right: 0;
  top: 0;
  animation: slideRight 0.8s ease forwards;
}

.content .kanantengah,
.slide2 .kanantengah,
.slide4 .kanantengah,
.slide6 .kanantengah,
.slide7 .kanantengah,
.slide8 .kanantengah {
  width: 230px;
  height: 316px;
  position: absolute;
  right: 0;
  top: 14rem;
  animation: slideRight 0.8s ease forwards;
}
.content .kananbawah,
.slide2 .kananbawah,
.slide4 .kananbawah,
.slide6 .kananbawah,
.slide7 .kananbawah,
.slide8 .kananbawah {
  width: 300px;
  height: 180px;
  position: absolute;
  bottom: 0;
  right: 0;
  animation: slideRight 0.8s ease forwards;
}

.content .prewed {
  width: 300px;
  height: 300px;
  display: block;
  margin: auto;
  margin-bottom: 2rem;
  transition: 0.3s ease-in-out;
  animation: slideBottom 0.8s ease forwards;
}

.content .prewed:hover {
  width: 320px;
  height: 320px;
}

.content .text {
  margin-bottom: 10rem;
  display: block;
  margin: auto;
  text-align: center;
}

.content .slide1-h1,
.slide1-p1,
.slide1-p2 {
  text-align: center;
}

.content .slide1-h1 {
  font-family: "Italiana", serif;
  font-weight: 400;
  font-size: 60px;
  margin-bottom: 1rem;
  word-spacing: 5rem;
  animation: slideRight 0.8s ease forwards;
}

.content .slide1-p1,
.slide1-p2 {
  font-family: "Inria Serif", serif;
  font-weight: 300;
  font-size: 28px;
  animation: slideLeft 0.8s ease forwards;
}

.content .open {
  text-decoration: none;
  font-family: "Italiana", serif;
  font-weight: 100;
  font-size: 24px;
  color: #fff;
  background-color: #0a405e;
  padding: 1rem 2rem;
  border-radius: 2rem;
  display: inline-block;
  margin-top: 2rem;
  transition: 0.3s ease-in;
  animation: slideTop 0.8s ease forwards;
}

.content .open:hover {
  background-color: #93b9d8;
}

/* ========================================================== */

/* slide 2 */

.slide2 {
  width: 100%;
  height: 24.7%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  /* background-color: #ff849c; */
}

.slide-two {
  width: 85%;
  height: 100%;
  /* background-color: #ffd6d6; */
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
  margin-bottom: 3rem;
}

.slide-two .slide2-p1,
.slide2-p2,
.slide2-p3,
.slide2-p4 {
  font-family: "Inria Serif", serif;
  font-weight: 400;
}

.slide-two .slide2-p1 {
  font-size: 30px;
}

.slide-two .slide2-p2 {
  font-size: 25px;
  margin-top: 4rem;
}

.slide-two .slide2-p3,
.slide2-p4 {
  font-size: 30px;
  font-weight: 300;
}

.slide-two .slide2-h1 {
  font-size: 60px;
  margin-top: 2rem;
  word-spacing: 5rem;
}

.slide-two .slide2-h3 {
  font-size: 50px;
  margin-bottom: 1rem;
  word-spacing: 1rem;
  margin-top: 2rem;
}
/*  */
.slide3 {
  width: 100%;
  height: 24.7%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  /* background-color: #ff849c; */
}

/* ========================================================== */

/* slide  3*/

.slide3 {
  width: 100%;
  height: 24.7%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.slide-three {
  width: 85%;
  height: 25%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  /* background-color: red; */
}

.slide-three h1 {
  font-family: "Italiana", serif;
  font-weight: 400;
  font-size: 60px;
}

.slide-three2 {
  width: 100%;
  height: 75%;
  display: flex;
  /* flex-direction: column;
  align-items: center;
  justify-content: center; */
  /* background-color: aqua; */
}

.slide-three2 .pria,
.wanita {
  width: 40%;
  height: 100%;
  /* background: #ffd6d6; */
}

.slide-three2 .love {
  width: 20%;
  height: 100%;
}

.slide-three2 .pria,
.love,
.wanita {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.slide-three2 .pria,
.wanita {
  width: 40%;
  height: 100%;
  /* background: #ffd6d6; */
}

.slide-three2 .pria img,
.slide-three2 .wanita img {
  width: 350px;
  height: 350px;
  margin-top: -4rem;
}

.slide-three2 .love img {
  width: 170px;
  height: 150px;
  margin-top: -12rem;
}

.pria .text1,
.wanita .text1 {
  font-family: "Italiana", serif;
  font-weight: 400;
  font-size: 40px;
  margin-top: 0.8rem;
  margin-bottom: 1.3rem;
}
.pria .text2,
.wanita .text2 {
  font-family: "Inria Serif", serif;
  font-weight: 300;
  font-size: 30px;
}

/* ========================================================== */
.slide4 {
  width: 100%;
  height: 24.7%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.kitab {
  width: 50%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.kitab .ayat,
.isi {
  font-family: "Inria Serif", serif;
  font-weight: 300;
}

.kitab .ayat {
  font-size: 35px;
  margin-top: -10rem;
}

.kitab .isii {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 2rem;
}

.kitab .isi {
  font-size: 25px;
}
/* ====================== */
.slide5 {
  width: 100%;
  height: 24.7%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.title {
  width: 100%;
  height: 15%;
  /* background-color: aqua; */
  text-align: center;
}

.title h1 {
  margin-bottom: 40rem;
  font-family: "Italiana", serif;
  font-weight: 400;
  font-size: 100px;
  margin-top: 1rem;
}

.slide5 .galeri1 {
  width: 100%;
  height: 80%;
  /* background-color: #ff849c; */
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.slide5 .galeri2 {
  width: 100%;
  height: 80%;
  /* background-color: #93b9d8; */
  display: flex;
  align-items: center;
  justify-content: center;
}

.galeri1 img,
.galeri2 img {
  width: 350px;
  height: 240px;
  margin: 0 1rem;
  border: 10px solid rgba(97, 217, 255, 0.3);
  transition: 1s ease-in-out;
}

.galeri1 img {
  margin-bottom: -3rem;
}

.galeri2 img {
  margin-top: -3rem;
}

.galeri1 img:hover,
.galeri2 img:hover {
  width: 340px;
  height: 225px;
}

/* ================= */

.slide6 {
  width: 100%;
  height: 24.7%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.slide6 h1 {
  font-family: "Italiana", serif;
  font-weight: 400;
  font-size: 100px;
}

.resep {
  width: 100%;
  height: 70%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon1,
.icon2,
.icon3 {
  width: 20%;
  height: 80%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 0 1px;
}

.icon1 img,
.icon2 img,
.icon3 img {
  width: 150px;
  height: 150px;
}

.icon1 img,
.icon3 img {
  margin-top: -10rem;
}

.icon2 img {
  margin-top: 12rem;
}

.icon1 p,
.icon2 p,
.icon3 p {
  font-family: "Inria Serif", serif;
  font-weight: 300;
  font-size: 16px;
}

.icon1 p,
.icon3 p {
  margin-top: 2rem;
}

/* ============================ */
.slide7 {
  width: 100%;
  height: 24.7%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.slide7 h1 {
  font-family: "Italiana", serif;
  font-weight: 400;
  font-size: 100px;
  margin-bottom: 3rem;
}

.kiasan {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.kiasan p {
  font-family: "Inria Serif", serif;
  font-weight: 300;
  font-size: 25px;
}

.money {
  width: 100%;
  height: 40%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.bank1,
.bank2 {
  width: 20%;
  height: 100%;
  margin: 0 3rem;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.bank1 p,
.bank2 p {
  font-family: "Inria Serif", serif;
  font-weight: 300;
  font-size: 25px;
}

.copy {
  display: flex;
  align-items: center;
  justify-content: center;
}

.copy p {
  margin-right: 5px;
}

.copy button {
  cursor: pointer;
  margin-right: -4rem;
  border: none;
  transition: 0.5s ease-in-out;
}

.copy button:hover {
  border: 0.1px solid #ff849c;
}

/* ============================ */
.slide8 {
  width: 100%;
  height: 24.7%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
}

.slide8 p {
  font-family: "Italiana", serif;
  font-weight: 300;
  font-size: 30px;
  margin-top: -5rem;
}

.slide8 h1 {
  font-family: "Italiana", serif;
  font-weight: 400;
  font-size: 70px;
  margin-bottom: 1rem;
  word-spacing: 5rem;
  margin-top: 3rem;
}

.slide8 a {
  color: #ff849c;
  display: block;
  margin-left: 80rem;
  position: absolute;
  bottom: 5rem;
  padding: 2px 4px;
  transition: 0.4s ease-in-out;
}
i[data-feather="arrow-up"] {
  font-size: 244px; /* Ubah ukuran ikon sesuai kebutuhan Anda */
}
.slide8 a:hover {
  background-color: #93b9d8;
}

/* ======================== */
@media (max-width: 1366px) {
  html {
    font-size: 75%;
  }
}

/* tablet */
@media (max-width: 768px) {
  html {
    font-size: 62.5%;
  }
  .content .kiriatas,
  .slide2 .kiriatas,
  .slide4 .kiriatas,
  .slide6 .kiriatas,
  .slide7 .kiriatas,
  .slide8 .kiriatas {
    width: 120px;
    height: 100px;
    position: absolute;
    top: 0;
    left: 0;
  }

  .content .kiritengah {
    bottom: 20rem;
  }

  .content .kiritengah,
  .slide2 .kiritengah,
  .slide4 .kiritengah,
  .slide6 .kiritengah,
  .slide7 .kiritengah,
  .slide8 .kiritengah {
    width: 120px;
    height: 200px;
    position: absolute;
    left: 0;
  }

  .content .kiribawah,
  .slide2 .kiribawah,
  .slide4 .kiribawah,
  .slide6 .kiribawah,
  .slide7 .kiribawah,
  .slide8 .kiribawah {
    width: 176px;
    height: 109px;
    position: absolute;
    bottom: 0;
    left: 0;
  }

  .content .tengahatas,
  .slide2 .tengahatas,
  .slide4 .tengahatas,
  .slide6 .tengahatas,
  .slide7 .tengahatas,
  .slide8 .tengahatas {
    width: 175px;
    height: 100px;
    position: absolute;
    top: 0;
    right: 15rem;
  }

  .content .kananatas,
  .slide2 .kananatas,
  .slide4 .kananatas,
  .slide6 .kananatas,
  .slide7 .kananatas,
  .slide8 .kananatas {
    width: 165px;
    height: 102px;
    position: absolute;
    right: 0;
    top: 0;
  }

  .content .kanantengah,
  .slide2 .kanantengah,
  .slide4 .kanantengah,
  .slide6 .kanantengah,
  .slide7 .kanantengah,
  .slide8 .kanantengah {
    width: 140px;
    height: 190px;
    position: absolute;
    right: 0;
    top: 14rem;
  }
  .content .kananbawah,
  .slide2 .kananbawah,
  .slide4 .kananbawah,
  .slide6 .kananbawah,
  .slide7 .kananbawah,
  .slide8 .kananbawah {
    width: 200px;
    height: 100px;
    position: absolute;
    bottom: 0;
    right: 0;
  }
  .content .prewed {
    width: 250px;
    height: 250px;
  }
  .content .prewed:hover {
    width: 260px;
    height: 260px;
  }
  .content .slide1-h1 {
    font-size: 30px;
  }

  .content .slide1-p1,
  .slide1-p2 {
    font-size: 16px;
  }

  .content .open {
    font-size: 20px;
  }
  /* ===================== */

  .slide-two .slide2-p1 {
    font-size: 18px;
  }

  .slide-two .slide2-p2 {
    font-size: 15px;
  }

  .slide-two .slide2-p3,
  .slide2-p4 {
    font-size: 15px;
  }

  .slide-two .slide2-h1 {
    font-size: 30px;
  }

  .slide-two .slide2-h3 {
    font-size: 30px;
  }
  /* ========================== */
  .slide-three h1 {
    font-size: 40px;
  }

  .slide3 {
    width: 100%;
    height: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: aqua;
  }

  .slide-three {
    width: 85%;
    height: 10%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* background-color: red; */
  }

  .slide-three2 {
    width: 100%;
    height: 90%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* background-color: aqua; */
  }

  .slide-three2 .pria,
  .wanita {
    width: 40%;
    height: 100%;
    /* background: #ffd6d6; */
  }

  .slide-three2 .love {
    width: 20%;
    height: 100%;
  }

  .slide-three2 .pria,
  .love,
  .wanita {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .slide-three2 .pria,
  .wanita {
    width: 40%;
    height: 100%;
    /* background: #ffd6d6; */
  }

  .slide-three2 .love {
    width: 20%;
    height: 100%;
  }

  .slide-three2 .pria,
  .love,
  .wanita {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .slide-three2 .pria,
  .wanita {
    width: 100%;
    height: 100%;
    /* background: #ffd6d6; */
  }

  .slide-three2 .love {
    width: 100%;
    height: 10%;
    /* background-color: #0f025f; */
  }

  .slide-three2 .pria img,
  .slide-three2 .wanita img {
    width: 200px;
    height: 200px;
    margin-top: -4rem;
  }

  .slide-three2 .love img {
    width: 100px;
    height: 80px;
    margin-top: -2rem;
  }

  .pria .text1,
  .wanita .text1 {
    font-size: 20px;
    margin-top: 0.8rem;
    margin-bottom: 1.3rem;
  }
  .pria .text2,
  .wanita .text2 {
    font-size: 13px;
  }
  /* =========================== */
  .kitab {
    width: 90%;
  }
  .kitab .ayat {
    font-size: 20px;
  }
  .kitab .isi {
    font-size: 13px;
  }
  /* =================================================== */

  .slide5 {
    width: 100%;
    height: 100%;
  }
  .title {
    height: 15%;
    /* background-color: aqua; */
  }
  .title h1 {
    margin-bottom: 40rem;
    font-family: "Italiana", serif;
    font-weight: 400;
    font-size: 50px;
    margin-top: 4rem;
  }
  .slide5 .galeri1 {
    width: 100%;
    height: 80%;
    /* background-color: #ff849c; */
    flex-direction: column;
    margin-top: -25rem;
  }
  .slide5 .galeri2 {
    width: 100%;
    height: 80%;
    /* background-color: #93b9d8; */
    flex-direction: column;
  }

  .galeri1 img,
  .galeri2 img {
    margin: 4rem 0;
  }

  .galeri1 img {
    margin-bottom: -3rem;
  }

  .galeri2 img {
    margin-top: -3rem;
  }

  .galeri1 img:hover,
  .galeri2 img:hover {
    width: 340px;
    height: 225px;
  }
  /* =================================================== */
  .slide6 h1 {
    font-size: 30px;
  }
  .resep {
    height: 60%;
    /* background-color: #0f025f; */
  }
  .icon1,
  .icon2,
  .icon3 {
    width: 50%;
    height: 80%;
    /* background-color: #0f025f; */
  }
  .icon1 img,
  .icon2 img,
  .icon3 img {
    width: 80px;
    height: 80px;
  }
  .icon1 p,
  .icon2 p,
  .icon3 p {
    font-size: 9px;
  }
  /* ====================================== */
  .slide7 {
    width: 100%;
    height: 24.7%;
  }
  .slide7 h1 {
    font-size: 50px;
  }
  .kiasan {
    width: 90%;
  }
  .kiasan p {
    font-size: 13px;
  }
  .bank1,
  .bank2 {
    width: 30%;
    height: 100%;
    /* background-color: #0f025f; */
  }
  .bank1 img,
  .bank2 img {
    width: 120px;
    height: 120px;
  }
  .bank1 p,
  .bank2 p {
    font-size: 15px;
  }
  .copy button img {
    width: 10px;
    height: 10px;
  }

  /* ====================================== */
  .slide8 p {
    font-size: 25px;
  }
  .slide8 h1 {
    font-size: 50px;
  }
  .slide8 a {
    right: 5rem;
  }
}

/* mobile */
@media (max-width: 450px) {
  html {
    font-size: 55%;
  }
}

@keyframes slideRight {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideLeft {
  0% {
    transform: translateX(100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideTop {
  0% {
    transform: translateY(100%);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes slideBottom {
  0% {
    transform: translateY(-100%);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

    </style>
    <link
      rel="shortcut icon"
      href="../../asetdashboard/logo.png"
      type="image/x-icon"
    />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <section class="hero" id="home">
      <main class="content">
        <button class="toggleButton" id="toggleButton">
          <i data-feather="pause"></i>
        </button>

        <img class="kiriatas" src="<?php echo e(asset('assetswedding/desain2/kiri atas.png')); ?>" alt="" />
        <img class="kiritengah" src="<?php echo e(asset('assetswedding/desain2/kiri tengah.png')); ?>" alt="" />
        <img class="kiribawah" src="<?php echo e(asset('assetswedding/desain2/kiri bawah.png')); ?>" alt="" />
        <img class="tengahatas" src="<?php echo e(asset('assetswedding/desain2/tengah atas.png')); ?>" alt="" />
        <img class="kananatas" src="<?php echo e(asset('assetswedding/desain2/kanan atas.png')); ?>" alt="" />
        <img class="kanantengah" src="<?php echo e(asset('assetswedding/desain2/kanan tengah.png')); ?>" alt="" />
        <img class="kananbawah" src="<?php echo e(asset('assetswedding/desain2/kanan bawah.png')); ?>" alt="" />
        <img class="prewed" src="<?php echo e(asset('assetswedding/desain2/foto.png')); ?>" alt="" />
        <div class="text">
          <h1 class="slide1-h1">Dyna & Roni</h1>
          <p class="slide1-p1">Kepada Bapak/Ibu/Saudara/i</p>
          <p class="slide1-p2">
            Kami mengundang anda untuk hadir di acara pernikahan kami
          </p>
          <a class="open" href="#slide2" onclick="unlockSection(); playMusic();"
            >Buka undangan</a
          >
        </div>
      </main>
    </section>

    <!-- ============================== -->
    <section class="slide2" id="slide2">
      <img class="kiriatas" src="<?php echo e(asset('assetswedding/desain2/kiri atas.png')); ?>" alt="" />
      <img class="kiritengah" src="<?php echo e(asset('assetswedding/desain2/kiri tengah.png')); ?>" alt="" />
      <img class="kiribawah" src="<?php echo e(asset('assetswedding/desain2/kiri bawah.png')); ?>" alt="" />
      <img class="tengahatas" src="<?php echo e(asset('assetswedding/desain2/tengah atas.png')); ?>" alt="" />
      <img class="kananatas" src="<?php echo e(asset('assetswedding/desain2/kanan atas.png')); ?>" alt="" />
      <img class="kanantengah" src="<?php echo e(asset('assetswedding/desain2/kanan tengah.png')); ?>" alt="" />
      <img class="kananbawah" src="<?php echo e(asset('assetswedding/desain2/kanan bawah.png')); ?>" alt="" />
      <div class="slide-two">
        <p class="slide2-p1">SAVE THE DATE</p>
        <p class="slide2-p2">The Wedding Of</p>
        <h1 class="slide2-h1">Dyna & Roni</h1>
        <h3 class="slide2-h3">APRIL | 17 | 2023</h3>
        <p class="slide2-p3">Kami harap anda dapat hadir</p>
        <p class="slide2-p4">di hari istimewa kami.</p>
      </div>
    </section>
    <!-- ================================== -->
    <section class="slide3">
      <div class="slide-three">
        <h1>Mempelai</h1>
      </div>
      <div class="slide-three2">
        <div class="pria">
          <img src="<?php echo e(asset('assetswedding/desain2/pria.png')); ?>" alt="" />
          <p class="text1">Roni Evander</p>
          <p class="text2">Putra Kedua</p>
          <p class="text2">Bapak Abdul & Ibu Maria</p>
        </div>
        <div class="love">
          <img src="<?php echo e(asset('assetswedding/desain2/love.png')); ?>" alt="" />
        </div>
        <div class="wanita">
          <img src="<?php echo e(asset('assetswedding/desain2/wanita.png')); ?>" alt="" />
          <p class="text1">Dyna Rosalina</p>
          <p class="text2">Putri Ketiga</p>
          <p class="text2">Bapak Situmorang & Ibu Riana</p>
        </div>
      </div>
    </section>
    <!-- ======================== -->
    <section class="slide4">
      <img class="kiriatas" src="<?php echo e(asset('assetswedding/desain2/kiri atas.png')); ?>" alt="" />
      <img class="kiritengah" src="<?php echo e(asset('assetswedding/desain2/kiri tengah.png')); ?>" alt="" />
      <img class="kiribawah" src="<?php echo e(asset('assetswedding/desain2/kiri bawah.png')); ?>" alt="" />
      <img class="tengahatas" src="<?php echo e(asset('assetswedding/desain2/tengah atas.png')); ?>" alt="" />
      <img class="kananatas" src="<?php echo e(asset('assetswedding/desain2/kanan atas.png')); ?>" alt="" />
      <img class="kanantengah" src="<?php echo e(asset('assetswedding/desain2/kanan tengah.png')); ?>" alt="" />
      <img class="kananbawah" src="<?php echo e(asset('assetswedding/desain2/kanan bawah.png')); ?>" alt="" />
      <div class="kitab">
        <p class="ayat">Ayat kitab suci</p>
        <div class="isii">
          <p class="isi">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
          </p>
          <p class="isi">
            voluptatibus voluptates ratione perferendis, velit fuga adipisci
          </p>
          <p class="isi">
            consectetur alias aspernatur esse. Blanditiis nesciunt commodi
          </p>
          <p class="isi">
            aperiam accusamus! Eum culpa exercitationem adipisci
          </p>
          <p class="isi">delectus.</p>
        </div>
      </div>
    </section>
    <!-- ================================ -->
    <section class="slide5">
      <div class="title">
        <h1>Galeri</h1>
      </div>
      <div class="galeri1">
        <img src="<?php echo e(asset('assetswedding/desain2/galery1.png')); ?>" alt="" />
        <img src="<?php echo e(asset('assetswedding/desain2/galery2.png')); ?>" alt="" />
        <img src="<?php echo e(asset('assetswedding/desain2/galery3.png')); ?>" alt="" />
      </div>
      <div class="galeri2">
        <img src="<?php echo e(asset('assetswedding/desain2/galery4.png')); ?>" alt="" />
        <img src="<?php echo e(asset('assetswedding/desain2/galery5.png')); ?>" alt="" />
        <img src="<?php echo e(asset('assetswedding/desain2/galery6.png')); ?>" alt="" />
      </div>
    </section>
    <!-- =============================== -->
    <section class="slide6">
      <img class="kiriatas" src="<?php echo e(asset('assetswedding/desain2/kiri atas.png')); ?>" alt="" />
      <img class="kiritengah" src="<?php echo e(asset('assetswedding/desain2/kiri tengah.png')); ?>" alt="" />
      <img class="kiribawah" src="<?php echo e(asset('assetswedding/desain2/kiri bawah.png')); ?>" alt="" />
      <img class="tengahatas" src="<?php echo e(asset('assetswedding/desain2/tengah atas.png')); ?>" alt="" />
      <img class="kananatas" src="<?php echo e(asset('assetswedding/desain2/kanan atas.png')); ?>" alt="" />
      <img class="kanantengah" src="<?php echo e(asset('assetswedding/desain2/kanan tengah.png')); ?>" alt="" />
      <img class="kananbawah" src="<?php echo e(asset('assetswedding/desain2/kanan bawah.png')); ?>" alt="" />
      <h1>Resepsi & Akad Nikah</h1>
      <div class="resep">
        <div class="icon1">
          <img src="<?php echo e(asset('assetswedding/desain2/resep1.png')); ?>" alt="" />
          <p>Minggu, 17 April 2023</p>
        </div>
        <div class="icon2">
          <img src="<?php echo e(asset('assetswedding/desain2/resep2.png')); ?>" alt="" />
          <p>Gedung Tokong Nanas, Bandung</p>
        </div>
        <div class="icon3">
          <img src="<?php echo e(asset('assetswedding/desain2/resep3.png')); ?>" alt="" />
          <p>Pukul 08.00 sd selesai</p>
        </div>
      </div>
    </section>
    <!-- ===================================== -->
    <section class="slide7">
      <img class="kiriatas" src="<?php echo e(asset('assetswedding/desain2/kiri atas.png')); ?>" alt="" />
      <img class="kiritengah" src="<?php echo e(asset('assetswedding/desain2/kiri tengah.png')); ?>" alt="" />
      <img class="kiribawah" src="<?php echo e(asset('assetswedding/desain2/kiri bawah.png')); ?>" alt="" />
      <img class="tengahatas" src="<?php echo e(asset('assetswedding/desain2/tengah atas.png')); ?>" alt="" />
      <img class="kananatas" src="<?php echo e(asset('assetswedding/desain2/kanan atas.png')); ?>" alt="" />
      <img class="kanantengah" src="<?php echo e(asset('assetswedding/desain2/kanan tengah.png')); ?>" alt="" />
      <img class="kananbawah" src="<?php echo e(asset('assetswedding/desain2/kanan bawah.png')); ?>" alt="" />
      <h1>Amplop Digital</h1>
      <div class="kiasan">
        <p>Doa restu Anda merupakan karunia yang sangat berarti bagi kami.</p>
        <p>Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat</p>
        <p>memberi kado secara cashless.</p>
      </div>
      <div class="money">
        <div class="bank1">
          <img src="<?php echo e(asset('assetswedding/desain2/bca.png')); ?>" alt="" />
          <div class="copy">
            <p id="myText">1234567890</p>
            <button onclick="copyText()">
              <img src="<?php echo e(asset('assetswedding/desain2/copy.png')); ?>" alt="" />
            </button>
          </div>
          <p>a/n Roni Evander</p>
        </div>
        <div class="bank2">
          <img src="<?php echo e(asset('assetswedding/desain2/bni.png')); ?>" alt="" />
          <div class="copy">
            <p id="myText2">2220008989</p>
            <button onclick="copyText2()">
              <img src="<?php echo e(asset('assetswedding/desain2/copy.png')); ?>" alt="" />
            </button>
          </div>
          <p>a/n Dyna Rosalina</p>
        </div>
      </div>
    </section>
    <!-- ============================ -->
    <section class="slide8">
      <img class="kiriatas" src="<?php echo e(asset('assetswedding/desain2/kiri atas.png')); ?>" alt="" />
      <img class="kiritengah" src="<?php echo e(asset('assetswedding/desain2/kiri tengah.png')); ?>" alt="" />
      <img class="kiribawah" src="<?php echo e(asset('assetswedding/desain2/kiri bawah.png')); ?>" alt="" />
      <img class="tengahatas" src="<?php echo e(asset('assetswedding/desain2/tengah atas.png')); ?>" alt="" />
      <img class="kananatas" src="<?php echo e(asset('assetswedding/desain2/kanan atas.png')); ?> "alt="" />
      <img class="kanantengah" src="<?php echo e(asset('assetswedding/desain2/kanan tengah.png')); ?>" alt="" />
      <img class="kananbawah" src="<?php echo e(asset('assetswedding/desain2/kanan bawah.png')); ?>" alt="" />
      <p>Terima Kasih Atas Doa & Restunya</p>
      <h1 class="slide2-h1">Dyna & Roni</h1>
      <a href="#"><i data-feather="arrow-up"></i></a>
    </section>

    <script >
        window.onload = function () {
  window.scrollTo(0, 0);
  document.body.style.overflow = "hidden";
};

function unlockSection() {
  document.body.style.overflow = "visible";
}

// function playMusic() {
//   var music = new Audio();
//   music.src = "./aset/only.mp3";
//   music.loop = true;
//   music.autoplay = true;
// }

var music = new Audio();
music.src = "<?php echo e(asset('assetswedding/desain2/only.mp3')); ?>";
music.loop = true;
music.autoplay = false;

var isPlaying = false;

function playMusic() {
  if (isPlaying) {
    music.pause();
  } else {
    music.play();
  }
  isPlaying = !isPlaying;
}

var toggleButton = document.getElementById("toggleButton");

toggleButton.addEventListener("click", function () {
  playMusic();
  toggleButton.innerHTML = isPlaying
    ? '<i data-feather="pause"></i>'
    : '<i data-feather="play"></i>';
  feather.replace();
});

function copyText() {
  var text = document.getElementById("myText").innerText;
  navigator.clipboard
    .writeText(text)
    .then(function () {
      console.log("Teks telah disalin!");
    })
    .catch(function (error) {
      console.error("Gagal menyalin teks:", error);
    });
}

function copyText2() {
  var text = document.getElementById("myText2").innerText;
  navigator.clipboard
    .writeText(text)
    .then(function () {
      console.log("Teks telah disalin!");
    })
    .catch(function (error) {
      console.error("Gagal menyalin teks:", error);
    });
}

    </script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
<?php /**PATH C:\Freelance\4602-tubes-nikah-yuk\4602-tubes-nikah-yuk-main\resources\views/undangan2.blade.php ENDPATH**/ ?>