<section class="header-4">
    <header id="headers4-block">
        <div class="wrapper">
            <div class="d-grid nav-mobile-block header-align">
                <div class="logo">
                    <a class="brand-logo" href="{{route('home')}}">
                        <img src="{{asset('assets/images/logo.jpg')}}" alt="" style="height: 40px; width:100px" />

                    </a>

                </div>
                <input type=" checkbox" id="nav" />
                <label class="nav" for="nav"></label>
                <nav>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop">
                    <ul class="menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="{{route('pro')}}">Products</a></li>
                        <li><a href="services.html">Services</a></li>
                        {{-- <li>
                        <!-- sumenu Drop Down -->
                        <label for="drop-3" class="toggle toogle-3">Pages <span class="angle-dropdown"
                                aria-hidden="true"></span>
                        </label>
                        <a href="#pages">Pages <span class="angle-dropdown" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-3">

                        <ul class="first-dropdown">
                            <li><a href="team.html" class="drop-text">Our Team</a></li>
                            <li><a href="team-single.html" class="drop-text">Team single</a></li>
                            <li><a href="portfolio.html" class="drop-text">Projects</a></li>
                            <li><a href="pricing.html" class="drop-text">Pricing plans</a></li>
                            <li><a href="error.html" class="drop-text">404</a></li>
                            <li><a href="coming-soon.html" class="drop-text">Coming soon</a></li>
                            <li><a href="login.html" class="drop-text">Login</a></li>
                            <li><a href="signup.html" class="drop-text">Register</a></li>
                            <li><a href="search-results.html" class="drop-text">Search results</a></li>
                            <li><a href="timeline.html" class="drop-text">Timeline</a></li>
                            <li><a href="faq.html" class="drop-text">Faq</a></li>
                            <li><a href="email-template.html" class="drop-text">Email Template</a></li>
                            <li><a href="landing.html" class="drop-text">Landing page</a></li>
                        </ul>
                    </li> --}}
                        {{-- <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-4" class="toggle toogle-4">Blog <span class="angle-dropdown"
                                aria-hidden="true"></span>
                        </label>
                        <a href="#blog">Blog <span class="angle-dropdown" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-4">

                        <ul>
                            <li><a href="blog.html" class="drop-text">Blog</a></li>
                            <li><a href="blog-single.html" class="drop-text">Blog Details</a></li>
                        </ul>
                    </li> --}}
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-4" class="toggle toogle-4">Pages <span class="angle-dropdown"
                                    aria-hidden="true"></span>
                            </label>
                            <a href="#blog">Pages <span class="angle-dropdown" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-4">

                            <ul>
                                <li><a href="blog.html" class="drop-text">Projects</a></li>
                                <li><a href="blog-single.html" class="drop-text">Our Team</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                        <!-- Second Tier Drop Down -->
                        <label for="drop-5" class="toggle toogle-4">Shop <span class="angle-dropdown"
                                aria-hidden="true"></span>
                        </label>
                        <a href="#blog">Shop <span class="angle-dropdown" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-5">

                        <ul>
                            <li><a href="ecommerce.html" class="drop-text">Ecommerce</a></li>
                            <li><a href="ecommerce-single.html" class="drop-text">Ecommerce single</a></li>
                            <li><a href="ecommerce-cart.html" class="drop-text">Ecommerce cart</a></li>
                        </ul>
                    </li> --}}
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</section>

<script src="{{asset('assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
<script>
    $('#drop').change(function () {
            if ($('#drop').is(":checked")) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', 'auto');
            }
        });
</script>
