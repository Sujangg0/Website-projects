<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business website</title>
    <!-- Linking to css-->
    <link rel="stylesheet" href="css/style.css">
    <!--Box icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> 
    <!--person-slides-->
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
</head>
<body>
    <!-- hero section-->
    <header class="header" id="intro">
        <!-- Navagation bar -->
        <?php
            include('navbar.php')
        ?>
        
        <div class="hero-div-center-container">
            <h1>We take care of your house</h1>
            <p>Transforming houses into havens, one repair at a time</p>
            <div class="hero-btns">
                <button type="button" class="btn-trans">Learn more</button>
                <button type="button" class="btn-white">Contact Us</button>
            </div>
        </div>
    </header>

    

    <!-- Seervice section -->
    <div class="service">
        <h3>Our services</h3>
        <div class="service-container">
            <div class="box">
                <div class="icon">1</div>
                <div class="content">
                    <h3>Plumbing</h3>
                    <p>Our plumbing services ensure efficient water flow and drainage systems, fixing leaks, and maintaining plumbing fixtures for residential and commercial properties</p>
                </div>
            </div>
            <div class="box">
                <div class="icon">2</div>
                <div class="content">
                    <h3>Electrical</h3>
                    <p>We provide comprehensive electrical solutions, including installation, repair, and maintenance of wiring, outlets, switches, and lighting fixtures to ensure safety and functionality.</p>
                    
                </div>
            </div>
            <div class="box">
                <div class="icon">3</div>
                <div class="content">
                    <h3>HVAC</h3>
                    <p>Our HVAC services cover installation, repair, and maintenance of heating, cooling, and ventilation systems, ensuring optimal indoor air quality and comfort throughout the year.</p>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Team Section-->
    <section class="team" id="team">
        <div class="container">
            <div class="title">
                <h3>Meet Best People</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            <div class="row owl-carousel owl-theme">
                <div class="team-item">
                    <div class="team-img">
                        <img src = "./assets/cat.png" alt="">
                    </div>
                    <div class="team-info">
                        <h3>John Smith</h3>
                        <span>CEO</span>
                    </div>
                </div>

                <div class="team-item">
                    <div class="team-img">
                        <img src = "./assets/cat.png" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Emily Johnson</h3>
                        <span>Operations Manager</span>
                    </div>
                </div>

                <div class="team-item">
                    <div class="team-img">
                        <img src = "./assets/cat.png" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Michael Davis</h3>
                        <span>Head of Customer Relations</span>
                    </div>
                </div>

                <div class="team-item">
                    <div class="team-img">
                        <img src = "./assets/cat.png" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Sarah Thompson</h3>
                        <span>Marketing Coordinator</span>
                    </div>
                </div>

                <div class="team-item">
                    <div class="team-img">
                        <img src = "./assets/cat.png" alt="">
                    </div>
                    <div class="team-info">
                        <h3>David Brown</h3>
                        <span>Chief Financial Officer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--faq section-->
    <section class="faq">
        <div class="container">
            <div class="title">
                <h2>Have Any Question</h2>
                <p class="text">Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            <div class="row">
                <div class="faq-item">
                    <div class="faq-head">
                        <h3>What types of maintenance services are available on the platform?</h3>
                        <span><i class='bx bx-plus'></i></span>
                    </div>
                    <div class="faq-content">
                        <p class="text">Our platform offers a wide range of maintenance services for residential properties, including plumbing, electrical work, HVAC services, carpentry, painting, cleaning, and more. Whether you need routine maintenance or emergency repairs, you can find trusted professionals to meet your needs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-head">
                        <h3>How can I book a service on the Home Maintenance Service platform?</h3>
                        <span><i class='bx bx-plus'></i></span>
                    </div>
                    <div class="faq-content">
                        <p class="text">Booking a service is simple and convenient. First, create an account on our platform if you haven't already. Then, browse through the available services and select the one that fits your requirements. Choose a suitable date and time for the service, and proceed to confirm your booking. Once confirmed, you'll receive notifications and updates regarding your appointment.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-head">
                        <h3>How are service providers screened for safety and reliability?</h3>
                        <span><i class='bx bx-plus'></i></span>
                    </div>
                    <div class="faq-content">
                        <p class="text">Our platform employs thorough background checks and verifies licenses and credentials for all service providers. Users can also review and rate providers, ensuring transparency and accountability. We offer dedicated customer support to address any concerns promptly, ensuring a secure and trustworthy service experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--testimonial section-->
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="title">
                <h2>Testimonials Words</h2>
                <p class="text">Some Of Our Clients</p>
            </div>

            <div class="row owl-carousel owl-theme">
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="./assets/customer-1.jpg" alt="">
                    </div>
                    <p>Exceptional service! From booking to completion, the process was seamless. Highly recommend!</p>
                    <span>Alisha Key</span>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="./assets/customer-2.jpg" alt="">
                    </div>
                    <p>Impressed by the quality of service and attention to detail. Made home maintenance hassle-free!</p>
                    <span>Shiva Bahadur</span>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="./assets/customer-3.jpg" alt="">
                    </div>
                    <p>Professional team, great communication, and top-notch work. Will definitely use again!</p>
                    <span>Keiven owen</span>
                </div>
            </div>
        </div>
    </section>


    <!--footer section-->
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p><i class='bx bxs-location-plus' ></i> Basundhara, Kathmandu</p>
                <p><i class='bx bxs-phone'></i> +911 98025896314</p>
                <p><i class='bx bxs-envelope'></i> xyz@gmail.com</p>
            </div>

            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul class="list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-content">
                <h3>follow Us</h3>
                <ul class="social-icons">
                <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram' ></i></i></a></li>
                <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
            </ul>
            </div>
        </div>
    </footer>

    
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!--Owl carousel-->
    <script src="./OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <!--link to js-->
    <script src="./js/script.js"></script>
    
</body>
</html>