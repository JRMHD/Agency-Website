<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="images/logofavicon.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/querryContact.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #loading-screen img {
            animation: rotate 2s infinite linear;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
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
                    <a href="{{ url('/') }}"><img src="images\WEBLOGO.png" alt=""></a>
                </div>
                <ul class="navbar__links">
                    <li><a href="{{ url('/') }}" class="home-link">Home</a></li>
                    <li><a href="{{ url('about') }}" class="about-link">About</a></li>
                    <li><a href="{{ url('contact') }}" class="contact-link">Contact</a></li>
                </ul>
                <div class="navbar__buttons">
                    <a class="navbar__buttons__sign-in" href="#">Sign-in</a>
                    <a class="navbar__buttons__register" href="#">Register</a>
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
    <main class="contact-page">
        <section class="hero-pages">
            <div class="hero-pages__overlay"></div>
            <div class="container">
                <div class="hero-pages__text">
                    <h3>Contact</h3>
                    <p><a href="{{ url('/') }}">Home</a> / Contact</p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="contact-div">
                <div class="contact-div__text">
                    <h2>Need additional information?</h2>
                    <p>Our team is dedicated to providing you with the assistance you need.We're here to help you every
                        step of the way.</p>

                    <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-phone">
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                            </path>
                        </svg> &nbsp; 0710542747</a>
                    <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-phone">
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                            </path>
                        </svg> &nbsp; 0726043625</a>
                    <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-mail">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                            </path>
                            <path d="M3 7l9 6l9 -6"></path>
                        </svg> &nbsp; laurencemariita@gmail.com</a>
                    <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-location">
                            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5">
                            </path>
                        </svg>&nbsp; Kisii, Kenya</a>
                </div>
                <div class="contact-div__form">
                    <form action="{{ route('submit-form') }}" method="POST">
                        @csrf
                        <label>Full Name <b>*</b></label>
                        <input type="text" name="full_name" placeholder="E.g: &quot;Joe Shmoe&quot;">
                        <label class="mail">Email <b>*</b></label>
                        <input type="email" name="email" placeholder="youremail@example.com">
                        <label class="fone">Tell us about it <b>*</b></label>
                        <textarea name="message" placeholder="Write Here.."></textarea>
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="tabler-icon tabler-icon-mail-opened">
                                <path d="M3 9l9 6l9 -6l-9 -6l-9 6"></path>
                                <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"></path>
                                <path d="M3 19l6 -6"></path>
                                <path d="M15 13l6 6"></path>
                            </svg>&nbsp; Send Message
                        </button>
                        @if (session('success'))
                            <div class="alert-success" style="color: green;">{{ session('success') }}</div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
        <div class="book-banner">
            <div class="book-banner__overlay"></div>
            <div class="container">
                <div class="text-content">
                    <h2>Book a Rent by getting in touch with us</h2>
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
                        <h3>0726043625</h3>
                    </span>
                </div>
            </div>

        </div>
    </main>
    @include('footer')
    <script src="https://kit.fontawesome.com/ca4923168d.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <div id="loading-screen">
        <img src="images/logofavicon.png" alt="Loading...">
    </div>

    <script>
        window.addEventListener('load', function() {
            var loadingScreen = document.getElementById('loading-screen');
            if (loadingScreen) {
                setTimeout(function() {
                    loadingScreen.style.display = 'none';
                }, 3000);
            }
        });
    </script>
</body>

</html>
