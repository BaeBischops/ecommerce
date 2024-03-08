<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Booking App</title>
</head>
<body>
    <!-- the HEADER section -->
    <header class="header">
        <a href="index.html" class="logo">reserved.africa</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#packages">packages</a>
            <a href="assets/modules/reserve.html">reservations</a>
        </nav>
        <div id="menu-btn" class="bi bi-list"></div>
    </header>

    <!-- HOME section -->
    <section class="home" id="home">
        <div class="swiper slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(/assets/img/dbn.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>see the world differently</h3>
                        <a href="assets/modules/packages.html" class="btn">discover</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(/assets/img/cpt.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>see new places</h3>
                        <a href="assets/modules/packages.html" class="btn">discover</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(/assets/img/jhb.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>explore culture</h3>
                        <a href="assets/modules/packages.html" class="btn">discover</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(/assets/img/pta.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="assets/modules/packages.html" class="btn">discover</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- the MAIN section -->
    <section class="services">
        <h1 class="heading">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="/assets/img/icon1.png" alt="">
                <h3>adventures</h3>
            </div>
            <div class="box">
                <img src="/assets/img/icon2.png" alt="">
                <h3>tourism</h3>
            </div>
            <div class="box">
                <img src="/assets/img/icon3.png" alt="">
                <h3>hikking</h3>
            </div>
            <div class="box">
                <img src="/assets/img/icon4.png" alt="">
                <h3>camping</h3>
            </div>
            <div class="box">
                <img src="/assets/img/icon5.png" alt="">
                <h3>off roading</h3>
            </div>
            <div class="box">
                <img src="/assets/img/icon6.png" alt="">
                <h3>diving</h3>
            </div>
        </div>
    </section>

    <!-- the ABOUT section -->
    <section class="about" id="about">
        <div class="image">
            <img src="assets/img/about.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>
                At reserved.africa, we believe in the magic of travel. 
                Our mission is to connect adventurers with unforgettable experiences
                across the diverse and enchanting landscapes of South Africa. 
                Join us on a journey of discovery, adventure, and wonder. 
                Start planning your next South African escape with us today!
            </p>
            <a href="about.html" class="btn">read more</a>
        </div>
    </section>

    <!-- the PACKAGES section -->
    <section class="package" id="packages">
        <h1 class="heading">our packages</h1>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="assets/img/img1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure &  desination</h3>
                    <p>
                        providing exceptional service and 
                        personalized recommendations to ensure tailored preferences
                    </p>
                    <a href="reserve.html" class="btn">reserve</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/img/img2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure &  tour</h3>
                    <p>
                        providing exceptional service and 
                        personalized recommendations to ensure tailored preferences
                    </p>
                    <a href="reserve.html" class="btn">reserve</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/img/img3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>spa & relaxation</h3>
                    <p>
                        providing exceptional service and 
                        personalized recommendations to ensure tailored preferences
                    </p>
                    <a href="reserve.html" class="btn">reserve</a>
                </div>
            </div>
        </div>
        <div class="more">
            <a href="package.html" class="btn">load more</a>
        </div>
    </section>

    <!-- OFFERS section -->
    <section class="offers">
        <div class="content">
            <h3>Exclusive Loyalty Rewards for Our Members</h3>
            <p>
                At Reserved.Africa, we're committed to rewarding our loyal members for their continued trust and support. 
                That's why we're thrilled to introduce our exclusive loyalty program, designed to offer you even more value on your travels!
            </p>
            <a href="signin.html" class="btn">sign up now</a>
        </div>
    </section>

    <!-- the FOOTER section -->
    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"><i class="bi bi-chevron-right"></i>home</a>
                <a href="index.php"><i class="bi bi-chevron-right"></i>about</a>
                <a href="index.php"><i class="bi bi-chevron-right"></i>reservations</a>
            </div>
            <div class="box">
                <h3>other links</h3>
                <a href="index.php"><i class="bi bi-chevron-right"></i>privacy policy</a>
                <a href="index.php"><i class="bi bi-chevron-right"></i>terms of use</a>
                <a href="index.php"><i class="bi bi-chevron-right"></i>reviews</a>
            </div>
            <div class="box">
                <h3>contact us</h3>
                <a href="index.php"><i class="bi bi-phone"></i>+27 80 123 4567</a>
                <a href="index.php"><i class="bi bi-envelope"></i>info@reserved.africa</a>
                <a href="index.php"><i class="bi bi-map"></i>durban, 4000, south africa</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="index.php"><i class="bi bi-facebook"></i>reserved.africa</a>
                <a href="index.php"><i class="bi bi-twitter"></i>reserved.africa</a>
                <a href="index.php"><i class="bi bi-instagram"></i>reserved.africa</a>
                <a href="index.php"><i class="bi bi-tiktok"></i>reserved.africa</a>
            </div>
        </div>
        <div class="copy">
            <span>&#169 2022-2024 reserved.africa |</span> 
            <a href="#" id="management"><i class="bi bi-door-open-fill"></i>extranet login</a>
        </div>
    </footer>
    <!-- sripting -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>