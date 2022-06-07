<?php
session_start();
include('conexion/config.php');
if (isset($_SESSION['emailUser']) != "") {
    $nameUser      = $_SESSION['nameUser'];
    $emailUser     = $_SESSION['emailUser'];
    $email         = $_SESSION['emailUser'];
}
?>

<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--==Title==================================-->
<title>MHD - Full HD Movies</title>
<!--Stylesheet(CSS)==========================-->
<link rel="stylesheet" href="css/style.css"/>
<!--==Fav-icon===============================-->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--==Import-poppins-font====================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--==Import-Monoton-Font====================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
<!--==Using-Font-Awesome======================-->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<!--==CSS-Swiper==============================-->
<link rel="stylesheet" href="css/swiper-bundle.min.css"/>
</head>
<body>
    <!--==Scroll-Progress-bar=========================-->
    <div id="progress">
        <span id="progress-value"></span>
    </div>
    <!--==Navigation===================================-->
    <nav class="navigation">
        <!--menu-btn--------------->
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <!--logo------------------->
        <a href="index.html" class="logo">
            Movies<span>.hd</span>
        </a>
        <!--menu------------------->
        <ul class="menu">
            <li><a><?php echo $nameUser; ?></a></li>
            <li><a href="#">Genero</a></li>
            <li><a href="#">Peliculas</a></li>
            <li><a href="#">Contactos</a></li>
        </ul>
        <!--Search-box------------->
        <form action="" class="search-box">
            <!--input-->
            <input type="text" name="search" placeholder="Search Movie" class="search-input" required/>
            <!--btn-->
            <button type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <li><a href="sesion.php">Iniciar Sesion</a></li>
    </nav>
    <!--nav-end-->
    <!--==slider============================================-->
    <section id="main-slider">
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <!--1------------------------------------------>
      <div class="swiper-slide">
        <!--box------------------->
        <div class="main-slider-box">
            <!--overlayer-------->
            <a href="AP-Page.php" class="main-slider-overlay">
                <i class="fas fa-play"></i>
            </a>
            <!--img----------->
            <div class="main-slider-img">
                <img alt="Poster" src="images/p-1.jpg"/>
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2014</span>
                        <a href="AP-Page.php">Actividad Paranormal: Los Marcados</strong>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--2------------------------------------------>
      <div class="swiper-slide">
        <!--box------------------->
        <div class="main-slider-box">
            <!--overlayer-------->
            <a href="PDC-Page.php" class="main-slider-overlay">
                <i class="fas fa-play"></i>
            </a>
            <!--img----------->
            <div class="main-slider-img">
                <img alt="Poster" src="images/p-2.jpg"/>
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2017</span>
                        <a href="PDC-Page.php">Pirates of the Caribbean: Salazar's Revenge</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--3------------------------------------------>
      <div class="swiper-slide">
        <!--box------------------->
        <div class="main-slider-box">
            <!--overlayer-------->
            <a href="#" class="main-slider-overlay">
                <i class="fas fa-play"></i>
            </a>
            <!--img----------->
            <div class="main-slider-img">
                <img alt="Poster" src="images/p-3.jpg"/>
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2020</span>
                        <a href="#">BloodShot</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--4------------------------------------------>
      <div class="swiper-slide">
        <!--box------------------->
        <div class="main-slider-box">
            <!--overlayer-------->
            <a href="#" class="main-slider-overlay">
                <i class="fas fa-play"></i>
            </a>
            <!--img----------->
            <div class="main-slider-img">
                <img alt="Poster" src="images/p-4.jpg"/>
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Venom: Let There Be Carnage</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--5------------------------------------------>
      <div class="swiper-slide">
        <!--box------------------->
        <div class="main-slider-box">
            <!--overlayer-------->
            <a href="#" class="main-slider-overlay">
                <i class="fas fa-play"></i>
            </a>
            <!--img----------->
            <div class="main-slider-img">
                <img alt="Poster" src="images/p-5.jpg"/>
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2018</span>
                        <a href="#">Deadpool 2</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--6------------------------------------------>
      <div class="swiper-slide">
        <!--box------------------->
        <div class="main-slider-box">
            <!--overlayer-------->
            <a href="#" class="main-slider-overlay">
                <i class="fas fa-play"></i>
            </a>
            <!--img----------->
            <div class="main-slider-img">
                <img alt="Poster" src="images/p-6.jpg"/>
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Black Widow</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  
    </section>
    <!--btns-------------------->
    <div class="slider-btns">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!--slider-end-------->
    <!--==Latest-Movies==================================-->
    <section id="latest">
        <!--heading-------->
        <div class="latest-heading">
            <h1>Latest Movies</h1>
        </div>
        <!--container------->
        <div class="post-container">
            <!--post-box-1------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-1.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Venom: Let There Be Carnage</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-2------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-2.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">The Tomorrow War</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-3------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-3.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Jungle Cruise</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-4------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-4.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Dune</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-5------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-5.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">The Suicide Squad</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-6------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-6.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">No Time To Die</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-7------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-7.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Old</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-8------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-8.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Rumble</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-9------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-9.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">WandaVision</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-10------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-10.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Prisoners of the Ghostland (2021)</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-11------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-11.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Luca</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--post-box-12------------>
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="images/post-12.jpg"/>
                </div>
                <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2021</span>
                        <a href="#">Annette</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--container-end--->
        <!--page-number=====================-->
    <!--latest-post-end------->
    <!--==footer==============================-->
    <footer>
        <!--footer-logo--->
        <a href="index.html" class="logo">
            Movies<span>hd</span>
        </a>
        <!--copyright----->
        <span class="copyright">
            Copyright 2022 - (Cesar, Luis Eduardo, Miguel)
        </span>
    </footer>
    <!--==JS-Swiper====================================-->
    <script src="js/swiper-bundle.min.js"></script>
    <!--==jQuery=======================================-->
    <script src="js/jQuery.js"></script>
    <script>
        /*==scroll-progress-bar======================*/
        let scrollPrecentage = () =>{
            let scrollProgress = document.getElementById("progress");
            let progressValue = document.getElementById("progress-value");
            let pos = document.documentElement.scrollTop;
            let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrollValue = Math.round(pos * 100 / calcHeight);
            scrollProgress.style.background = `conic-gradient(#e70634 ${scrollValue}%, #2b2f38 ${scrollValue}%)`;
        }
        window.onscroll = scrollPrecentage;
        window.onload = scrollPrecentage;
        /*Initialize Swiper*/
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
          navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 50,
            },
          },
        });
        /*--menu-btn-fixed-when-scroll============*/
        $(window).scroll(function(){
            if($(document).scrollTop() > 20){
                $('.navigation').addClass('fix-icon');
            }
            else{
                $('.navigation').removeClass('fix-icon');
            }
        });
      </script>
</body>
</html>