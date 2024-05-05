<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sambal</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo asset('css/menu.css')?>" type="text/css"> 
    <script src="https://kit.fontawesome.com/3000ffabee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <nav>
            <img src="images/logo.png" class="logo" />
            <ul id="sidemenu">
              <li><a href="/">Kembali</a></li>
              <li><a href="/makanan-berat">Makanan Berat</a></li>
              <li><a href="/gorengan">Gorengan</a></li>
              <li><a href="/sambal">Sambal</a></li>
              <li><a href="/minuman">Minuman</a></li>
              <i class="fa-solid fa-xmark" onclick="closeMenu()"></i>
            </ul>
            <i class="fa-solid fa-ellipsis-vertical" onclick="openMenu()"></i>
          </nav>
        <div class="banner">
            <img src="images/banner-sambal.png" class="banner-img">
        </div>
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
</body>
</html>