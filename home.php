<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provincial Youth Development Office - Camarines Norte</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!--SWIPER CSS LINK-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--CUSTOM CSS FILE LINK-->
    <link rel="stylesheet" href="designs.css">
<!--
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        #loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 1000;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        #content {
            padding: 20px;
            text-align: center;
        }
    </style>
    -->

</head>

<body>
    <!--
<div id="loader-container">
        <div class="loader"></div>
    </div>-->
    <!--HEADER SECTION STARTS-->
    <section class="header">
        <a href="home.php" class="logo">
            <img src="images/LOGO.png">
            <div>
            <span class="logo-text"> Provincial Youth Development Office</span>
            <p>     Camarines Norte</p>
            </div>
        </a>

        <nav class="navbar">

            <a href="home.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Programs</a>
            <a href="career.php">Advocacy</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!--HEADER SECTIONS ENDS-->

    <!--HOME SECTION STARTS-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/homepage\ img\ 1.jpg) no-repeat">
                    <div class="content">
                        <span>Provincial Youth Development Office Camarines Norte</span>
                        <h2>Empowering the Youth for the Future!</h2>
                    </div>
                </div>
                <!--
                <div class="swiper-slide slide" style="background: url(images/homepage\ img\ 2.jpg) no-repeat">
                    <div class="content">
                        <span>Make real, long-lasting change happen</span>
                        <h3>The scale, breadth and depth of expertise at Accenture, combined with our culture of equality means we can solve virtually any problem and create 360˚ value across more than 40 industries.</h3>                
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/homepage\ img\ 3.jpg) no-repeat">
                    <div class="content">
                        <span>Your future starts here</span>
                        <h3>Find your fit, whether you're looking for student, graduate or entry-level opportunities</h3>                   
                    </div>
                </div>#-->
            </div>
        </div>
    </section>
    <!--HOME SECTIONS ENDS-->

    <!--HOME ABOUT SECTION STARTS-->
    <section class="home-about">
        <div class="image">
            <img src="images/about img 1.png" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>The Provincial Youth Development Office (PYDO) is tasked to institute programs, projects and activities
                related to youth and sports development.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!--HOME ABOUT SECTION ENDS-->

    <!--HOME CAREER STARTS
    <section class="home-career">
        <h1 class="heading-title">Discover your new career</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/career img 1.png" alt="">
                </div>
                <div class="content">
                    <h3>Executive Leaders</h3>
                    <p>Becoming an Accenture Leader unlocks a world of opportunities to create real, impactful change.</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/career img 2.png" alt="">
                </div>
                <div class="content">
                    <h3>Training & Development</h3>
                    <p>Learning is in our DNA. We commit to offering our people opportunities to acquire new skills and strengthen their readiness to advance into new roles.</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/career img 3.png" alt="">
                </div>
                <div class="content">
                    <h3>Experienced Professionals</h3>
                    <p>Bring your expertise to some of the most influential organizations in the world, transforming industries alongside the best of the best.</p>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="career.php" class="btn">Find More</a></div>
    </section>
    HOME CAREER ENDS-->


    <!--HOME SERVICES SECTION STARTS-->
    <section class="home-services">
        <h1 class="heading-title"> Centers for Youth Participation </h1>
        <div class="box-container">

            <div class="box">
                <img src="images/Education 3.png" alt="">
                <h3>Education</h3>
            </div>

            <div class="box">
                <img src="images/Health 3.png" alt="">
                <h3>Health</h3>
            </div>

            <div class="box">
                <img src="images/Social Inclusion and Equity 3.png" alt="">
                <h3>Social Inclusion and Equity</h3>
            </div>

            <div class="box">
                <img src="images/Active Citizenship 3.png" alt="">
                <h3>Active Citizenship</h3>
            </div>

            <div class="box">
                <img src="images/Economic Empowerment 3.png" alt="">
                <h3>Economic Empowerment</h3>
            </div>

            <div class="box">
                <img src="images/Peace Building and Security 3.png" alt="">
                <h3>Peace Building and Security</h3>
            </div>

            <div class="box">
                <img src="images/Environment 3.png" alt="">
                <h3>Environment</h3>
            </div>

            <div class="box">
                <img src="images/Global Mobility 3.png" alt="">
                <h3>Global Mobility</h3>
            </div>

            <div class="box">
                <img src="images/Governance 3.png" alt="">
                <h3>Governance</h3>
            </div>

            <div class="box">
                <img src="images/Agriculture 3.png" alt="">
                <h3>Agriculture</h3>
            </div>

        </div>
        <div class="load-more"><a href="career.php" class="btn">Details</a></div>
    </section>
    <!--HOME SERVICES SECTION ENDS-->


    <!--FOOTER SECTION STARTS-->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="https://nyc.gov.ph/" target="_blank"> <i class="fas fa-angle-right"></i> National Youth
                    Commission</a>
                <a href="https://yorpnyc.org.ph/" target="_blank"> <i class="fas fa-angle-right"></i> KABAYANI:
                    Kabataang Nagbabayanihan</a>
                <a href="https://drive.google.com/file/d/1PxVj7apTCK-utUtla5gUV68w_jxfH3p5/view" target="_blank"> <i
                        class="fas fa-angle-right"></i> Philippine Youth Development Plan 2023-2028</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a> <i class="fas fa-phone"></i> +63 912 036 6685</a>
                <a> <i class="fas fa-envelope" autocapitalize="off"></i> pydocamarinesnorte@gmail.com </a>
                <a href="https://www.facebook.com/pydocamnorte" target="_blank"> <i
                        class="fa-brands fa-facebook-messenger"></i> PYDO - CN</a>
            </div>

            <div class="box">
                <h3>Follow Us On Facebook</h3>
                <a href="https://www.facebook.com/nationalyouthcommission" target="_blank"> <i
                        class="fas fa-angle-right" aria-hidden="true"></i> National Youth Commission</a>
                <a href="https://www.facebook.com/pydocamnorte" target="_blank"><i class="fas fa-angle-right"
                        aria-hidden="true"></i> Provincial Youth Development Office</a>
                <a href="https://www.facebook.com/yorpnyc/" target="_blank"> <i class="fas fa-angle-right"
                        aria-hidden="true"></i> Youth Organization Registration Program
                </a>
            </div>
        </div>
        <div class="credit">Created by<span> PYDO Interns 2024</span> | ALL RIGHTS RESERVED</div>
    </section>
    <!--FOOTER SECTION ENDS-->

    <!--SWIPER JS FILE LINK-->


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--CUSTOM JS FILE LINK-->
    <script src="script.js"></script>
    <script>
    window.addEventListener('load', function() {
            // Hide the loader when the page is fully loaded
            document.getElementById('loader-container').style.display = 'none'; });
            </script>


</body>


</html>