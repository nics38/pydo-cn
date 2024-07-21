<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Provincial Youth Development Office - Camarines Norte</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

        <!--SWIPER CSS LINK-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <!--FONT AWESOME CDN LINK -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />

         <!-- Bootstrap CSS -->
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         
         <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

        <!--CUSTOM CSS FILE LINK-->
        <link rel="stylesheet" href="designs.css">
    </head>
    <style>
    .box {
        position: relative;
        overflow: hidden;
    }
    .box .image {
        position: relative;
    }
    .box .image .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        opacity: 0;
        transition: opacity 0.5s;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .box:hover .image .overlay {
        opacity: 1;
    }
    .social-icon {
        color: white;
        font-size: 20px;
    }
</style>
    <body>
        
    
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
            <a href="home.php">Home</a>
            <a href="about.php" class="active" >About</a>
            <a href="services.php">Programs</a>
            <a href="career.php">Advocacy</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!--HEADER SECTION ENDS-->
    <!--
    <div class="heading" style="background: url(images/background\ 3.gif) no-repeat;">
        <h1>About</h1>
    </div>
    -->

    <!--ABOUT SECTION STARTS-->
    <section class="about">
        <div class="image">
            <img src="images/about img 1.png" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p1>Get to know your Provincial Youth Office!</p1>
            <p>The Provincial Youth Development Office (PYDO) is tasked to institute programs, projects and activities related to youth and sports development by promoting and protecting not only the physical, but also the moral, spiritual, intellectual and social well-being of the Camarines Norte Youth and recognizing their vital role in nation-building as a whole by strengthening youth organizations in the province through networking and partnership with various NGOs, POs and GOs for resources augmentation.</p>
                </div>
    </section>
    <!--ABOUT SECTION ENDS-->


    <section class="MissionVision">
        <div class="box-container">

            <div class="box">
                <div class="content">
                <h3>Mandate</h3>

                    <p>As a talent-led organization, we invest in our people and support them with care, compassion, and continuous opportunities to learn, 
                        grow their skills, and advance their careers​.</p>
                </div>
            </div>

            <div class="box">
                <div class="content">
                <h3>Mission</h3>

                    <p>To catalyze the holistic development of the youth in Camarines Norte by uniting youth policies, harnessing resources, and supporting youth- I serving organizations. We are committed to implementing and advocating for effective programs and activities that empower youth, fostering their growth into responsible and engaged citizens. Through collaboration with stakeholders, we aim to create an environment that nurtures the physical, mental, and social well-being of our youth, preparing them for future leadership and success.</p>
                </div>
            </div>

            <div class="box">
                <div class="content">
                <h3>Vision</h3>

                <p>To be a leading force in youth and sports development, creating an inclusive environment where every young individual in Camarines Norte is empowered and equipped to reach their full potential. We envision a community where youth actively shape a prosperous future, supported by programs that promote their holistic growth, leadership, and well- being.</p>
                </div>
            </div>
        </div>
    </section>

    <!--SLIDE SECTION STARTS
    <section class="SLIDES">
        <div class="swiper slides-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <h3>Mission</h3>
                    <p>To catalyze the holistic development of the youth in Camarines Norte by uniting youth policies, harnessing resources, and supporting youth- I serving organizations. We are committed to implementing and advocating for effective programs and activities that empower youth, fostering their growth into responsible and engaged citizens. Through collaboration with stakeholders, we aim to create an environment that nurtures the physical, mental, and social well-being of our youth, preparing them for future leadership and success.​</p>
                </div>

                <div class="swiper-slide slide">
                    <h3>Mandate</h3>
                    <p>As a talent-led organization, we invest in our people and support them with care, compassion, and continuous opportunities to learn, grow their skills, and advance their careers.​​</p>
                </div>
                
                <div class="swiper-slide slide">
                    <h3>Vision</h3>
                    <p>To be a leading force in youth and sports development, creating an inclusive environment where every young individual in Camarines Norte is empowered and equipped to reach their full potential. We envision a community where youth actively shape a prosperous future, supported by programs that promote their holistic growth, leadership, and well- being.</p>
                </div>

            </div>
        </div>
    </section>
    SLIDE SECTION ENDS-->

     <!--HOME CAREER STARTS-->
     <section class="home-career">
        <h1 class="heading-title">The PYDO Team</h1>
        
        <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/0.png" alt="">
                <div class="overlay">
                <a href="#" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

            <div class="content">
                <h3>Christabell Angelica Abaño</h3>
                <p>PYDO Head</p>
            </div>
        </div>

            <div class="box">
                <div class="image">
                    <img src="images/1.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/rg.factor" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Renato Factor</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/2.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/yhelbacurin" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Yhel Lara Bacurin</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/3.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/profile.php?id=100004608257770" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Renato Caintic Jr.</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/4.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/li.bay.376" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Lorevie Efondo</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/5.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/batz.park.9" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Louis Rhey Adan</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/6.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/roldan.rosanna" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Rosanna Roldan</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/7.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/NikoooFactor" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Niko Factor</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/8.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/valeriana.memyself" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Valerie Torcelino</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="images/9.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/profile.php?id=61550916180592" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Christian John Calma</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                <img src="images/10.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/teveslinette" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Linette Ann Teves</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                <img src="images/11.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/profile.php?id=61559346188376" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Marilou Calwing</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                <img src="images/12.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/itsjassuee" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Jaspher Cariño</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                <img src="images/13.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/eisusvilla21" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Susan Español</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                <img src="images/14.png" alt="">
                    <div class="overlay">
                    <a href="https://www.facebook.com/ciijhane.sagra" target="_blank" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
                </div>
                <div class="content">
                    <h3>Cereh Jane Madi</h3>
                    <p>PYDO Staff</p>
                </div>
            </div>
            
        
    </section>
    <!--HOME CAREER ENDS-->

    <!--FOOTER SECTION STARTS-->
    <section class="footer">
        <div class="box-container">
            
            <div class="box">
                <h3>Quick Links</h3>
                <a href="https://nyc.gov.ph/" target="_blank"> <i class="fas fa-angle-right"></i> National Youth Commission</a>
                <a href="https://yorpnyc.org.ph/" target="_blank" > <i class="fas fa-angle-right"></i> KABAYANI: Kabataang Nagbabayanihan</a>
                <a href="https://drive.google.com/file/d/1PxVj7apTCK-utUtla5gUV68w_jxfH3p5/view" target="_blank" > <i class="fas fa-angle-right"></i> Philippine Youth Development Plan 2023-2028</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a > <i class="fas fa-phone"></i> +63 912 036 6685</a>
                <a > <i class="fas fa-envelope" autocapitalize="off" ></i> pydocamarinesnorte@gmail.com </a>
                <a href="https://www.facebook.com/pydocamnorte" target="_blank"> <i class="fa-brands fa-facebook-messenger"></i> PYDO - CN</a>
            </div>

            <div class="box">
                <h3>Follow Us On Facebook</h3>
                <a href="https://www.facebook.com/nationalyouthcommission" target="_blank"> <i class="fas fa-angle-right" aria-hidden="true"></i> National Youth Commission</a>
                <a href="https://www.facebook.com/pydocamnorte" target="_blank"><i class="fas fa-angle-right" aria-hidden="true"  ></i> Provincial Youth Development Office</a>
                <a href="https://www.facebook.com/yorpnyc/" target="_blank"> <i class="fas fa-angle-right" aria-hidden="true"></i> Youth Organization Registration Program
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


    </body>
    </html>