<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" />

    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">

    <!--swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
   <!-- header section starts-->
    <section class="header">
            <a href="index.php" class="logo">A&M Travel Agency</a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="package.php">Packages</a>
                <a href="book.php">Book Now</a>
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>

    
    </section>

    <!-- header section ends-->


    <!--home section starts-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Around the world</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--home section ends-->


    <!--services section starts-->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/travel-and-tourism.png" alt="">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="images/maps.png" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="images/fire.png" alt="">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="images/hiking.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/jeeps.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="images/tent.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>

    </section>
    <!--services section ends-->

    <!--home about section starts-->
    <section class="home-about">
        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Excepturi accusamus fugiat ut natus blanditiis, iusto obcaecati, 
                tenetur ea nam neque tempore nulla officiis! Eos qui, 
                quibusdam soluta error porro consequuntur.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>

    <!--home about section ends-->

    <!--home package section starts-->
    <!--home package section ends-->












    <!--footer starts-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About Us</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Packages</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book Now</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions </a>
                <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms Of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +92-73839-2222</a>
                <a href="#"> <i class="fas fa-phone"></i> +92-73839-2223</a>
                <a href="#"> <i class="fas fa-envelope"></i> AMtravels@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Karachi , Pakistan</a>
            </div>
            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"> <i class="fab fa-x-twitter"></i>Twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>
        </div>

        <div class="credit">Created By <span> Aliza Khalid & Syeda Masooma Raza </span> | All rights reserved </div>
    </section>
    <!--footer ends-->
<!--js link-->
<script src="js/script.js"></script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize Swiper
            var swiper = new Swiper(".home-slider", {
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<body>
</html>
