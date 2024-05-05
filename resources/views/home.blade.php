<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nyonya Terasi</title>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
    <script src="https://kit.fontawesome.com/3000ffabee.js" crossorigin="anonymous"></script>
    <script src="jquery-2.1.4.js"></script>
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </head>
  <body>
    <!--<div id="preloader"></div>-->

    <!-- Header -->
    <div id="header">
      <img src="images/background-home-tr.png" alt="background-home" class="background-img">
      <div class="container">
        <nav>
          <img src="images/logo.png" class="logo" />
          <ul id="sidemenu">
            <li><a href="#header">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#speciality">Spesialitas</a></li>
            <li><a href="#contact">Kontak</a></li>
            <i class="fa-solid fa-xmark" onclick="closeMenu()"></i>
          </ul>
          <i class="fa-solid fa-ellipsis-vertical" onclick="openMenu()"></i>
        </nav>
      </div>
      <div class="textMid">
        <div class="content">
          <h1>Nyonya Terasi</h1>
          <h2>Rumah Makan Nusantara</h2>
        </div>
      </div>
    </div>
    <!-- Menu -->
    <div id="menu">
      <div class="container container-img">
        <h1 class="subtitle">Ayo Cek Menu Kami!</h1>
        <p class="subtitle-desc">Disini tersedia menu makanan dan minuman yang kami sediakan</p>
        <div class="services-list">
          <div>
            <i class="fa-solid fa-bowl-food fa-fade"></i>
            <h2>Makanan Berat</h2>
            <p>Tersedia makanan berat seperti Nasi Goreng, Mie, Kwetiau, Bihun, Ayam, Bebek, dan Seafood.</p>
            <a href="/makanan-berat">Cek Disini</a>
          </div>
          <div>
            <i class="fa-solid fa-hotdog fa-fade"></i>
            <h2>Gorengan</h2>
            <p>Tersedia menu gorengan yang menyelerakan dan tentunya enak!</p>
            <a href="/gorengan">Cek Disini</a>
          </div>
          <div>
            <i class="fa-solid fa-pepper-hot fa-fade"></i>
            <h2>Sambal</h2>
            <p>Tersedia sambal yang mengundang untuk dinikmati dan bikin nagih!</p>
            <a href="/sambal">Cek Disini</a>
          </div>
          <div>
            <i class="fa-solid fa-mug-hot fa-fade"></i>
            <h2>Minuman</h2>
            <p>Tersedia berbagai jenis minuman untuk menemani hidangan-hidangan.</p>
            <a href="/minuman">Cek Disini</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About -->
    <div id="about">
      <div class="container about-bg">
        <div class="row">
          <div class="about-col-1 swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="slide swiper-slide">
                <img src="images/about-1.jpg" alt="" />
              </div>
              <div class="slide swiper-slide">
                <img src="images/about-2.jpg" alt="" />
                </div>
              <div class="slide swiper-slide">
                <img src="images/about-3.jpg" alt="" />
                </div>
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination nav-btn"></div>
          </div>
          <div class="about-col-2">
            <h1 class="subtitle">Apa Itu Nyonya Terasi?</h1>
            <p>
              Rumah Makan Nyonya Terasi adalah tempat yang menggabungkan kelezatan masakan Nusantara dengan nuansa yang nyaman dan ramah. Setiap hidangan, mulai dari ayam hingga ikan, sate, dan soto, disajikan dengan cita rasa autentik yang membuat lidah Anda terkagum-kagum. Namun, yang membuat tempat ini benar-benar istimewa adalah sambalnya yang begitu enak dan mengundang untuk dinikmati. Tersebar di beberapa lokasi di Batam seperti Nagoya, One Batam Mall, Batam Centre, dan Tiban, Nyonya Terasi adalah tempat yang sempurna untuk menikmati kelezatan masakan tradisional Indonesia.
            </p>
          </div>
        </div>
      </div>
    </div>


    <!-- Portfolio -->

    <div id="speciality">
      <div class="container">
        <h1 class="subtitle">Menu Terbaik Kami!</h1>
        <p class="subtitle-desc">Tersedia beberapa menu khas Nyonya Terasi</p>

        <div class="swiper mySwiper-speciality img-size">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/Ayam-Bakar.jpg" />
              <p class="pic-desc">Ayam Bakar</p>
            </div>
            <div class="swiper-slide">
              <img src="images/Sosis-Cabe-Ijo.jpg" />
              <p class="pic-desc">Sosis Cabe Ijo</p>
            </div>
            <div class="swiper-slide">
              <img src="images/Tahu-Petai.jpg" />
              <p class="pic-desc">Tahu Petai</p>
            </div>
          <div class="swiper-slide">
            <img src="images/Nasi-Goreng-Nyonya-Terasi.jpg" />
            <p class="pic-desc">Nasi Goreng Nyonya Terasi</p>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact">
      <div class="container contact-bg">
        <div class="row">
          <div class="contact-left">
            <h1 class="subtitle contact-subtitle">Hubungi Kami</h1>
            <p><i class="fa-solid fa-inbox"></i> nyonyaterasi@gmail.com</p>
            <p><i class="fa-solid fa-phone"></i> 0811-7718-151</p>
            <div class="social-icons">
              <a href="https://www.instagram.com/nyonyaterasi/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://wa.link/2b7mkv"><i class="fa-brands fa-whatsapp"></i></a>
              <a href="https://gofood.co.id/en/batam/restaurant/nyonya-terasi-batam-centre-15af3a0b-dd86-43d2-9d47-f987241181f9"><i class="fa-solid fa-bag-shopping"></i></a>
            </div>
          </div>
          <div class="contact-right">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0456195072375!2d104.04882487584796!3d1.1276485622479542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d2aa9771b43%3A0x535d924531fded76!2sNyonya%20Terasi%2C%20Batam%20Centre!5e0!3m2!1sen!2sid!4v1714383753466!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>Copyright © 2024 Nyonya Terasi. All Rights Reserved</p>
      </div>
    </div>

    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script>
      var tabLinks = document.getElementsByClassName("tab-links");
      var tabContents = document.getElementsByClassName("tab-contents");

      function opentab(tabName) {
        for (tabLink of tabLinks) {
          tabLink.classList.remove("active-link");
        }
        for (tabContent of tabContents) {
          tabContent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabName).classList.add("active-tab");
      }

    </script>

    <script>
      var sidemenu = document.getElementById("sidemenu");
      function openMenu() {
        sidemenu.style.right = "0";
      }
      function closeMenu() {
        sidemenu.style.right = "-200px";
      }
    </script>
    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycby5G2srJReFF2a8dSW9iFKEI0qH5jXoZP7CsPs_5tl-kC2zkDebiyK7e5kDt0Qu6iwywg/exec";
      const form = document.forms["submit-to-google-sheet"];

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            form.reset();
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script>
    var swiper = new Swiper(".mySwiper-speciality", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  </body>
</html>
