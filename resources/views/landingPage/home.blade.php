@extends('layout.app')

@section('head')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="{{asset('assets/plugin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugin/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugin/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugin/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('assets/plugin/css/main.css')}}" rel="stylesheet">
@endsection

@section('body-class','index-page')

@section('content')
    @include('landingPage.navbar')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h1>Empowering Your Business with Innovative Solutions</h1>
                        <p>We provide comprehensive services including tool creation, tool rental, and application or website development to elevate your business.</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">About Us</a>
{{--                            <a href="https://www.youtube.com/channel/UC9OSZtQZIM89ujl8L5Q9dxA" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>My Youtube</span></a>--}}
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{asset('assets/plugin/img/hero-img.png')}}" class="img-fluid animated" alt="Hero Image">
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Welcome to TheUnknownName06, your trusted partner in innovation and growth. We specialize in creating bespoke tools, offering flexible tool rental services, and developing custom applications and websites that cater to your unique business needs.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Custom tool creation designed to enhance your productivity and efficiency.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Flexible tool rental services tailored to your project requirements.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Innovative application and website development to boost your digital presence.</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>At TheUnknownName06, we believe in delivering solutions that drive success. Our team of experienced professionals works closely with you to understand your business goals and provide services that are both effective and efficient. Join us as we embark on this journey to build a successful future together.</p>
                        <a href="{{route('login.first-login')}}" class="read-more"><span>Login For More Information</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->




        <!-- Why Us Section -->
        <section id="why-us" class="section why-us" data-builder="section">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3><span>Why Choose </span><strong>TheUnknownName06</strong></h3>
                            <p>
                                At TheUnknownName06, we are dedicated to providing exceptional services that drive your business forward. Our expertise in tool creation, tool rental, and application or website development ensures that you receive customized solutions tailored to your unique needs. Here’s why we stand out:
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                            <div class="faq-item faq-active">
                                <h3><span>01</span> What makes our tool creation services unique?</h3>
                                <div class="faq-content">
                                    <p>We specialize in crafting bespoke tools that enhance your business efficiency and productivity. Our tools are designed with your specific requirements in mind, ensuring optimal performance and user satisfaction.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span>02</span> Why choose our tool rental services?</h3>
                                <div class="faq-content">
                                    <p>Our flexible rental options allow you to access the tools you need without the commitment of purchasing. Whether for short-term projects or long-term needs, our rental services provide the flexibility and affordability you’re looking for.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span>03</span> How can our application and website development services benefit you?</h3>
                                <div class="faq-content">
                                    <p>We create innovative applications and websites that elevate your online presence and drive engagement. Our development process is collaborative, ensuring that your vision is realized with precision and creativity.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span>03</span> Empowering Your Business with IoT Solutions</h3>
                                <div class="faq-content">
                                    <p>At TheUnknownName06, we specialize in creating cutting-edge IoT applications that revolutionize industries. Our expertise in IoT development allows us to build innovative solutions that enhance operational efficiency and deliver seamless connectivity.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->


                            <div class="faq-item">
                                <h3><span>04</span> What’s next for TheUnknownName06?</h3>
                                <div class="faq-content">
                                    <p>We are continuously expanding our services to meet your evolving needs. Soon, we will introduce seamless PayPal exchange services, making financial transactions smoother and more efficient for you.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                        <img src="{{asset('assets/plugin/img/why-us.png')}}" class="img-fluid" alt="Why Us Image" data-aos="zoom-in" data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section><!-- /Why Us Section -->


        <!-- Skills Section -->
        <section id="skills" class="skills section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-center">
                        <img src="{{asset('assets/plugin/img/skills.png')}}" class="img-fluid" alt="Skills Image">
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 content">

                        <h3>Enhanced Expertise for Superior Solutions</h3>
                        <p class="fst-italic">
                            At TheUnknownName06, we combine advanced skills with creativity to deliver outstanding results.
                        </p>

                        <div class="skills-content skills-animation">

                            <div class="progress">
                                <span class="skill"><span>HTML</span> <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>CSS</span> <i class="val">40%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Bootstrap 5</span> <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Javascript</span> <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>PHP advance</span> <i class="val">95%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Explore the range of services we offer.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-6 col-md-12 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-tools icon"></i></div>
                            <h4><a href="#" class="stretched-link">Thepakv5 Tools</a></h4>
                            <p>Unpack and modify PAK files from PUBG Mobile effortlessly with Thepakv5 Tools.</p>
                        </div>
                    </div><!-- End Thepakv5 Tools Item -->

                    <div class="col-xl-6 col-md-12 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-laptop icon"></i></div>
                            <h4><a href="#" class="stretched-link">Web Development</a></h4>
                            <p>Transform your ideas into stunning websites with our expert web development services.</p>
                        </div>
                    </div><!-- End Web Development Item -->

                    <div class="col-xl-6 col-md-12 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-phone icon"></i></div>
                            <h4><a href="#" class="stretched-link">App Development</a></h4>
                            <p>Create intuitive mobile applications that engage users and elevate your business presence.</p>
                        </div>
                    </div><!-- End App Development Item -->

                    <div class="col-xl-6 col-md-12 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-gear icon"></i></div>
                            <h4><a href="#" class="stretched-link">IoT Development (Arduino & PLC)</a></h4>
                            <p>Harness the power of IoT with our expertise in developing solutions using Arduino and PLC technologies.</p>
                        </div>
                    </div><!-- End IoT Development Item -->
                </div>
            </div>
        </section><!-- /Services Section -->




        <!-- Future Services Section -->
        <section id="future-services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Future Services</h2>
                <p>As we grow, we plan to introduce new services to better serve your needs.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-6 col-md-12 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-exchange icon"></i></div>
                            <h4><a href="#" class="stretched-link">PayPal Exchange Services</a></h4>
                            <p>In the near future, we will offer seamless PayPal exchange services to help you manage your financial transactions with ease and efficiency.</p>
                        </div>
                    </div><!-- End Future Service Item -->
                </div>
            </div>
        </section><!-- /Future Services Section -->


        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">
            <img src="{{asset('assets/plugin/img/cta-bg.jpg')}}" alt="Call to Action Background">

            <div class="container">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Get in Touch</h3>
                        <p>Are you ready to elevate your business with our innovative solutions? Contact us today to get started on your next project or to learn more about our services.</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </section><!-- /Call To Action Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Meet the Team</h2>
                <p>Get to know the passionate individuals behind TheUnknownName06.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('assets/img/tunbudi06/myfoto.png') }}" class="img-fluid" alt="TUNBudi06 Photo">
                            </div>
                            <div class="member-info">
                                <h4>TUNBudi06</h4>
                                <span>Owner & Founder</span>
                                <p>I am a dedicated Fullstack Developer, with a strong focus on backend development. Let's create something amazing together!</p>
                                <div class="social mt-3">
                                    <a href="https://www.instagram.com/tunbudi06" target="_blank" class="me-2"><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UC9OSZtQZIM89ujl8L5Q9dxA" target="_blank" class="me-2"><i class="bi bi-youtube"></i></a>
                                    <a href="https://t.me/tunbudi06" target="_blank"><i class="bi bi-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>


        </section><!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>Have questions or need more information? Feel free to reach out to us!</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">
                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Kuntungan, RT/RW 34/17, Desa Wrati, Kecamatan Kejayan, Kabupaten Pasuruan, Jawa Timur 67172</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+62 856 3170 084</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>anjaytun2006@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.10892968400563!2d112.82332933989376!3d-7.71071588836029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1718606491259!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="{{route('app.ContactForm')}}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest updates on our tools, applications, and services!</p>
                        <form action="{{route('app.subscriptionNewsLetter')}}" method="post" class="php-email-form">
                            <div class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter your email">
                                <input type="submit" value="Subscribe">
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{route('landing-page-home')}}" class="d-flex align-items-center">
                        <span class="sitename">TheUnknownName06</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Kuntungan, RT/RW 34/17, Desa Wrati, Kecamatan Kejayan,<br> Kabupaten Pasuruan, Jawa Timur 67172</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 856 3170 084</span></p>
                        <p><strong>Email:</strong> <span>anjaytun2006@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">About Us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of Service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">

                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-tools"></i> <a href="#services">Thepakv5 Tools</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Application Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">IoT Development (Arduino & PLC)</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Stay connected with us through social media for the latest updates and offerings.</p>
                    <div class="social-links d-flex">
                        <a href="https://instagram.com/theunknownname06" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://t.me/theunknownname06" target="_blank"><i class="bi bi-telegram"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">TheUnknownName06</strong> <span>All Rights Reserved</span></p>
        </div>

    </footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/plugin/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/plugin/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/plugin/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/plugin/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/EA/node_modules/waypoints/lib/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/plugin/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/plugin/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/plugin/js/main.js')}}"></script>
@endsection
