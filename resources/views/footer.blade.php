<footer>
    <div class="container">
        <div class="footer-content">
            <ul class="footer-content-1">
                <li><span>LAURENCE</span>Agency Services</li>
                <li>
                    We offer a wide range of services including logbook transfer,
                    Uber services, real estate assistance, commercial vehicle hire,
                    and second-hand motor vehicle deals. Let us meet all your agency
                    needs.
                </li>
                <li>
                    <a href="tel:0710542747"><i class="fa-solid fa-phone"></i> &nbsp; 0710542747</a>
                </li>
                <li>
                    <a href="mailto:laurencemariita@gmail.com"><i class="fa-solid fa-envelope"></i>&nbsp;
                        laurencemariita@gmail.com</a>
                </li>
                <li>
                    <a href="https://www.jrmhd.tech/" style="font-size: 14px">Designed by Jrmhd.Tech</a>
                </li>
            </ul>
            <ul class="footer-content-2">
                <li>Quick Links</li>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about') }}">About Us</a></li>
                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                <li><a href="{{ url('https://jrmhd.tech/') }}">Contact Developer</a></li>
            </ul>
            <ul class="footer-content-2">
                <li>Working Hours</li>
                <li>Mon - Fri: 8:00AM - 5:00PM</li>
                <li>Sat: 9:00AM - 1:00PM</li>
                <li>Sun: Closed</li>
            </ul>
            <ul class="footer-content-2">
                <li>Subscribe</li>
                <li>
                    <p>
                        Stay updated with the latest news and updates from Laurence
                        Agency Services.
                    </p>
                </li>
                <form action="{{ route('subscribe.store') }}" method="POST">
                    @csrf
                    <li><input type="text" name="first_name" placeholder="First Name" required /></li>
                    <li><input type="email" name="email" placeholder="Enter Email Address" required /></li>
                    <li><button type="submit" class="submit-email">Subscribe</button></li>
                    @if (session('success'))
                        <div class="alert-success" style="color: green;">{{ session('success') }}</div>
                    @endif
                </form>

            </ul>
        </div>
    </div>
</footer>
