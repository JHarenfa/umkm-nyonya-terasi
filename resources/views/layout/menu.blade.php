<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo asset('css/menu.css'); ?>" type="text/css">
    <script src="jquery-2.1.4.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3000ffabee.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <!-- Navigation Bar -->
        <nav>
            <img src="images/logo.png" class="logo" />
            <ul id="sidemenu">
                <li><a href="{{ route('home') }}">Kembali</a></li>
                <li><a href="makanan-berat">Makanan Berat</a></li>
                <li><a href="gorengan">Gorengan</a></li>
                <li><a href="sambal">Sambal</a></li>
                <li><a href="minuman">Minuman</a></li>
                <i class="fa-solid fa-xmark" onclick="closeMenu()"></i>
            </ul>
            <i class="fa-solid fa-ellipsis-vertical" onclick="openMenu()"></i>
        </nav>

        @yield('content')

    </div>
    <!-- Footer -->
    <div class="copyright">
        <p>Copyright © 2024 Nyonya Terasi. All Rights Reserved</p>
    </div>

    <!-- Sidemenu JS -->
    <script>
        var sidemenu = document.getElementById("sidemenu");

        function openMenu() {
            sidemenu.style.right = "0";
        }

        function closeMenu() {
            sidemenu.style.right = "-200px";
        }
    </script>

    <!-- Swiper JS -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                360: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },

                480: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
