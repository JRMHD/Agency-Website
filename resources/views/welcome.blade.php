<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laurence Agency Homepage</title>
    <link rel="icon" type="image/png" href="images/logofavicon.png">
    <link rel="shortcut icon" href="images/" type="image/x-icon" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/scrollbar.css" />
    <link rel="stylesheet" href="css/querryHome.css" />
</head>

<body>
    <header style="margin-bottom: 0px">
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
                    <li>
                        <a href="{{ url('about') }}"><fontsninja-text id="fontsninja-text-12"
                                class="fontsninja-family-1933">About</fontsninja-text></a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}"><fontsninja-text id="fontsninja-text-20"
                                class="fontsninja-family-1933">Contact</fontsninja-text></a>
                    </li>
                </ul>


                <div class="mobile-navbar__links">
                    @auth
                        <!-- Show indicator for logged-in user -->
                        <a href="{{ route('dashboard') }}">
                            <!-- SVG icon -->
                            <img src="images\userproffile.png" alt="User Profile" width="30" height="30">
                        </a>
                    @else
                        <!-- Show sign-in and register links for non-logged-in user -->
                        <a class="mobile-navbar__links-sign-in" href="{{ route('login') }}">Sign-In</a>
                        <a class="mobile-navbar__links-register" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>


            </div>
            <div class="navbar">
                <div class="navbar-img">
                    <a href="{{ url('/') }}"><img src="images\WEBLOGO.png" alt="" /></a>
                </div>
                <ul class="navbar-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">About</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
                <div class="navbar-buttons">
                    @auth
                        <!-- Show indicator for logged-in user -->
                        <a href="{{ route('dashboard') }}">
                            <!-- SVG icon -->
                            <img src="images\userproffile.png" alt="User Profile" width="30" height="30">
                        </a>
                    @else
                        <!-- Show sign-in and register links for non-logged-in user -->
                        <a class="navbar-buttons-sign-in" href="{{ route('login') }}">Sign-In</a>
                        <a class="navbar-buttons-register" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>


                <div class="mobile-hamb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="tabler-icon tabler-icon-menu-2">
                        <path d="M4 6l16 0"></path>
                        <path d="M4 12l16 0"></path>
                        <path d="M4 18l16 0"></path>
                    </svg>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="hero-section" style="margin-top: 50px">
            <div class="container">
                <img class="bg-shape" src="images/hero/hero-bg.png" alt="" />
                <div class="hero-content">
                    <div class="hero-content-text">
                        <h5>Welcome to Laurence Agency Services</h5>
                        <h1>Your One-Stop <span>Solution for</span> Various Services</h1>

                        <p>
                            Explore a range of services tailored to meet your needs. From
                            logbook transfer to Uber services, real estate assistance to
                            commercial vehicle hire, and second-hand motor vehicle deals -
                            we've got you covered!
                        </p>
                        <div class="hero-content-text-btns">
                            <a class="hero-content-text-btns-book-ride" href="{{ url('contact') }}">Contact Us
                                &nbsp;<i class=""></i></a>
                            <a class="hero-content-text-btns-learn-more" href="{{ url('about') }}">Discover More
                                &nbsp;
                                <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                    <img class="hero-content-car-img" src="images/hero/main-car.png" alt="" />
                </div>
            </div>
        </section>

        <section id="booking-section" class="book-section">
            <div class="modal-overlay"></div>
            <div class="container">
                <div class="book-content">
                    <div class="book-content-box">
                        <h2>Book a Service</h2>
                        <p class="error-message">All fields required!</p>
                        <p class="booking-done">
                            Your booking request has been submitted. We'll get back to you
                            soon!
                        </p>
                        <form class="box-form">
                            <div class="box-form-car-type">
                                <label><i class="fa-solid fa-car"></i> Select Service
                                    <b>*</b></label>
                                <select>
                                    <option>Select your service</option>
                                    <option value="Logbook Transfer">Logbook Transfer</option>
                                    <option value="Uber Service">Uber Service</option>
                                    <option value="Real Estate Assistance">
                                        Real Estate Assistance
                                    </option>
                                    <option value="Commercial Vehicle Hire">
                                        Commercial Vehicle Hire
                                    </option>
                                    <option value="Second Hand Vehicle Deals">
                                        Second Hand Vehicle Deals
                                    </option>
                                </select>
                            </div>
                            <div class="box-form-car-type">
                                <label><i class="fa-solid fa-location-dot"></i> Location <b>*</b>
                                </label>
                                <select>
                                    <option>Select location</option>
                                    <option>Nairobi</option>
                                    <option>Kisii</option>
                                    <option>Mombasa</option>
                                    <option>Kisumu</option>
                                    <option>Eldoret</option>
                                    <option>Nakuru</option>
                                </select>
                            </div>
                            <div class="box-form-car-time">
                                <label for="picktime"><i class="fa-regular fa-calendar-days"></i> Preferred Date
                                    <b>*</b></label>
                                <input type="date" id="picktime" />
                            </div>
                            <button type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="plan-section">
            <div class="container">
                <div class="plan-container">
                    <div class="plan-container-title">
                        <h3>Explore Our Services</h3>
                        <h2>Convenient & Reliable Agency Solutions</h2>
                    </div>
                    <div class="plan-container-boxes">
                        <div class="plan-container-boxes-box">
                            <img src="images\logbooktransfer.jpg" alt="Logbook Transfer" />
                            <h3>Logbook Transfer</h3>
                            <p>
                                Efficient and hassle-free logbook transfer services tailored
                                to your needs.
                            </p>
                        </div>
                        <div class="plan-container-boxes-box">
                            <img src="images\uberservices.jpg" alt="Uber Services" />
                            <h3>Uber Services</h3>
                            <p>
                                Seamless Uber services to get you to your destination with
                                ease.
                            </p>
                        </div>
                        <div class="plan-container-boxes-box">
                            <img src="images\real estate.jpg" alt="Real Estate" />
                            <h3>Real Estate</h3>
                            <p>
                                Explore our comprehensive real estate solutions for your
                                housing needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <div class="container">
                <div class="faq-content">
                    <div class="faq-content-title">
                        <h5>FAQ</h5>
                        <h2>Frequently Asked Questions</h2>
                        <p>
                            Frequently Asked Questions About Laurence Agency Services:
                            Answers to Common Concerns and Inquiries.
                        </p>
                    </div>
                    <div class="all-questions">
                        <div class="faq-box">
                            <div id="q1" class="faq-box-question">
                                <p>1. What services does Laurence Agency offer?</p>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div id="q1" class="faq-box-answer">
                                Laurence Agency offers a range of services including logbook
                                transfer, Uber services, real estate assistance, commercial
                                vehicle hire, and second-hand motor vehicle deals. We are
                                dedicated to providing comprehensive solutions to meet your
                                needs.
                            </div>
                        </div>
                        <div class="faq-box">
                            <div id="q2" class="faq-box-question">
                                <p>2. How can I contact Laurence Agency?</p>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div id="q2" class="faq-box-answer">
                                You can contact Laurence Agency by calling us at 0710542747 or
                                0713185013, or by emailing us at laurencemariita@gmail.com.
                                Our knowledgeable team is ready to assist you with any
                                questions or inquiries.
                            </div>
                        </div>
                        <div class="faq-box">
                            <div id="q3" class="faq-box-question">
                                <p>3. How can I book a service with Laurence Agency?</p>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div id="q3" class="faq-box-answer">
                                Booking a service with Laurence Agency is easy. Simply visit
                                our website or contact us directly to discuss your
                                requirements. Our team will assist you in selecting the right
                                service for your needs and guide you through the booking
                                process.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('footer')

    </main>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/ca4923168d.js" crossorigin="anonymous"></script>
</body>

</html>
