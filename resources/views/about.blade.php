<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/png" href="images/logofavicon.png">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/querryAbout.css">
</head>

<body>
    <header>
        <nav>
            <div class="mobile-navbar">
                <div class="mobile-navbar__close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="tabler-icon tabler-icon-x">
                        <path d="M18 6l-12 12"></path>
                        <path d="M6 6l12 12"></path>
                    </svg>
                </div>
                <ul class="mobile-navbar__links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">About</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="navbar">
                <div class="navbar__img">
                    <a href="{{ url('/') }}"><img src="images\WEBLOGO.png"></a>
                </div>
                <ul class="navbar__links">
                    <li class="home-link"><a href="{{ url('/') }}">Home</a></li>
                    <li class="about-link"><a href="{{ url('about') }}">About</a></li>
                    <li class="contact-link"><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
                <div class="navbar__buttons">
                    <a class="navbar__buttons__sign-in" href="#">Sign In</a>
                    <a class="navbar__buttons__register" href="#">Register</a>
                </div>
                <div class="mobile-lamb">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <main class="about-page">
        <section class="hero-pages">
            <div class="hero-pages__overlay"></div>
            <div class="container">
                <div class="hero-pages__text">
                    <h3>About</h3>
                    <p><a href="../index.html">Home</a> / About</p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="container">
                <div class="about-main">
                    <img class="about-main__img" src="../images/about/about-main.jpg" alt="car-renting">
                    <div class="about-main__text">
                        <h3>About Laurence Agency Services</h3>
                        <h2>Your Gateway to Comprehensive Solutions</h2>
                        <p>At Laurence Agency Services, we specialize in providing a wide range of services tailored to
                            meet your
                            needs. Whether you're looking for logbook transfer, Uber services, real estate assistance,
                            commercial
                            vehicle hire, or second-hand motor vehicle deals, we've got you covered!</p>
                        <div class="about-main__text__icons">
                            <div class="about-main__text__icons__box">
                                <img src="../images/about/icon1.png" alt="car-icon">
                                <span>
                                    <h4>20</h4>
                                    <p>Service Types</p>
                                </span>
                            </div>
                            <div class="about-main__text__icons__box">
                                <img src="../images/about/icon2.png" alt="car-icon">
                                <span>
                                    <h4>5</h4>
                                    <p>Service Outlets</p>
                                </span>
                            </div>
                            <div class="about-main__text__icons__box">
                                <img src="../images/about/icon3.png" alt="car-icon" class="last-fk">
                                <span>
                                    <h4>5+
                                    </h4>
                                    <p>Years of Experience</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="plan-section">
                <div class="container">
                    <div class="plan-container">
                        <div class="plan-container__title">
                            <h3>Explore Our Services</h3>
                            <h2>Convenient Solutions for Your Needs</h2>
                        </div>
                        <div class="plan-container__boxes">
                            <div class="plan-container__boxes__box">
                                <img src="../images/plan/icon1.png" alt="icon_img">
                                <h3>Flexible Options</h3>
                                <p>Discover a wide array of flexible options tailored to your requirements. We offer
                                    versatile solutions to suit every journey.</p>
                            </div>
                            <div class="plan-container__boxes__box">
                                <img src="../images/plan/icon2.png" alt="icon_img">
                                <h3>Expert Support</h3>
                                <p>Our team of experienced professionals is dedicated to providing expert support,
                                    ensuring a seamless experience throughout your journey.</p>
                            </div>
                            <div class="plan-container__boxes__box">
                                <img src="../images/plan/icon3.png" alt="icon_img">
                                <h3>Effortless Experience</h3>
                                <p>Embark on your adventure hassle-free. With our streamlined processes and
                                    user-friendly services, enjoy an effortless experience from start to finish.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="book-banner">
            <div class="book-banner__overlay"></div>
            <div class="container">
                <div class="text-content">
                    <h2>Book a Service with Us Today</h2>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="tabler-icon tabler-icon-phone">
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                            </path>
                        </svg>
                        <h3>0710542747</h3>
                        <h3>0713185013</h3>
                        <h3>0795421172</h3>
                    </span>
                </div>
            </div>

        </div>
    </main>
    @include('footer')
    <script src="https://kit.fontawesome.com/ca4923168d.js" crossorigin="anonymous"></script>
    <script src="../js/about.js"></script>
</body>

</html>
