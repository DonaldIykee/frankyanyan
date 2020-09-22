<!DOCTYPE html>
<html lang="en">

@include('includes.public.headerlink')

<body>


    <!-- Headers-4 block -->
    @include('includes.public.header')

    <!-- Headers-4 block -->
    <!-- //header -->


    <!-- banner -->
    @yield('content')
    <!-- //banner -->

    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
        <!---728x90--->

    </div>
    <!-- features-4 -->
    {{-- @include('includes.public.features') --}}
    <!-- features-4 -->

    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
        <!---728x90--->

    </div>
    <!-- grids -->
    {{-- <section class="grids-1">
        <div class="grids">
            <div class="wrapper">
                <h3 class="heading">Learn about our Energy Ecosystem</h3>
                <div class="grids-content text-center">
                    <div class="column">
                        <a href="single.html"><img src="assets/images/panel.jpg" alt="" class="img-responsive" /></a>
                        <h4><a href="single.html">Solar panels</a></h4>
                    </div>
                    <div class="column">
                        <a href="single.html"><img src="assets/images/battery.jpg" alt="" class="img-responsive" /></a>
                        <h4><a href="single.html">Solar Batteries</a></h4>
                    </div>
                    <div class="column">
                        <a href="single.html"><img src="assets/images/charge.jpg" alt="" class="img-responsive" /></a>
                        <h4><a href="single.html">Charging point</a></h4>
                    </div>
                    <div class="column">
                        <a href="single.html"><img src="assets/images/solarhome.jpg" alt=""
                                class="img-responsive" /></a>
                        <h4><a href="single.html">Smart Home</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- //grids -->
    <!--content-with-photo-3 -->
    {{-- <section class="content-with-photo-3">
        <div class="customers3 top-bottom">
            <div class="wrapper">
                <div class="tabs-grided d-grid">
                    <div class="left-side">
                        <h2>How does Solar works</h2>
                        <p>Sunshine hits the solar panels and this DC energy flows from the panels to your solar
                            inverter.
                            The inverter converts DC to AC.
                        </p>
                        <div class="list-list">
                            <ul>
                                <li>
                                    <span class="fa fa-check-circle"></span>
                                    <p>Pellentesque lacus velit, condimentum at pellentesque vulputate, rutrum et
                                        leo.
                                        Quisque lacus tellus </p>
                                </li>
                                <li>
                                    <span class="fa fa-check-circle"></span>
                                    <p>Duis mollis nisi sed augue volutpat, et dignissim tellus. Integer
                                        vitae mi a neque maximus feugiat a tincidunt risus.</p>
                                </li>
                                <li>
                                    <span class="fa fa-check-circle"></span>
                                    <p>Pellentesque lacus velit, condimentum at pellentesque vulputate, rutrum et
                                        leo.
                                        Quisque lacus tellus </p>
                                </li>
                                <li>
                                    <span class="fa fa-check-circle"></span>
                                    <p>Duis mollis nisi sed augue volutpat, et dignissim tellus.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-side">
                        <img src="assets/images/solar.jpg" class="img-responsive" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--content-with-photo-3 -->
    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
        <!---728x90--->

    </div>
    {{-- <section class="feature-3">
        <div class="grid top-bottom">
            <div class="wrapper">
                <h3 class="heading">Why choose to work with Solar Service</h3>
                <div class="middle-section grid-column text-center">
                    <div class="three-grids-columns">
                        <div class="icon-bg-shape">
                            <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                        </div>
                        <a href="single.html">
                            <h4>Optimized energy output</h4>
                        </a>
                        <p>Cras ultricies erat sit amet euismod commodo. Cras urna ligula, varius sed dolor maximus
                            ante
                            non sed.</p>
                    </div>
                    <div class="three-grids-columns">
                        <div class="icon-bg-shape">
                            <span class="fa fa-dollar" aria-hidden="true"></span>
                        </div>
                        <a href="single.html">
                            <h4>Save the most money</h4>
                        </a>
                        <p> Ultricies cras erat sit amet euismod commodo. Cras urna ligula, varius sed dolor maximus
                            ante non sed.</p>
                    </div>
                    <div class="three-grids-columns">
                        <div class="icon-bg-shape">
                            <span class="fa fa-clock-o" aria-hidden="true"></span>
                        </div>
                        <a href="single.html">
                            <h4>Fastest Install time</h4>
                        </a>
                        <p>Amet cras ultricies erat sit euismod commodo. Cras urna ligula, varius sed dolor maximus
                            ante
                            non sed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- form 29 block -->
    {{-- <section class="forms-29">
        <div class="form-29">
            <div class="wrapper">
                <h3 class="heading">Let's see if going solar is right for you</h3>
                <div class="form-main-cont-29">
                    <div class="content-29-form d-grid">
                        <div class="content-left">
                            <h4 class="">Call <a href="tel:+7-800-999-800">+(21) 255 999 8888</a> now to get a free
                                quote or fill out the form</h4>
                            <p>Pellentesque lacus velit, condimentum at pellentesque vulputate, rutrum et leo.
                                Quisque
                                lacus tellus Duis
                                mollis nisi sed augue volutpat, et dignissim tellus. Integer vitae mi a neque.</p>
                        </div>
                        <form action="#" method="post" class="forms-29-form">
                            <input type="text" name="name" placeholder="First Name" required>
                            <input type="text" name="name" placeholder="Last Name" required>
                            <input type="number" name="phone" placeholder="Phone Number" required>
                            <input type="number" name="zipcode" placeholder="Zip Code" required>
                            <input type="email" name="email" placeholder="Your email" required>
                            <button type="submit" class="btn">Request Quote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- //form 29 block -->
    <!-- specifications -->
    {{-- <section class="specifications-9" id="statistics">
        <div class="main-w3">
            <div class="wrapper">
                <h3 class="heading white">Sunshine improves the Environment</h3>
                <div class="d-grid main-cont-wthree-fea">
                    <div class="grids-speci border-right-spe">
                        <h3 class="title-spe">130+</h3>
                        <p>Solar panels</p>
                    </div>
                    <div class="grids-speci border-right-spe">
                        <h3 class="title-spe">12458</h3>
                        <p>Miles of driving avoided</p>
                    </div>
                    <div class="grids-speci border-right-spe">
                        <h3 class="title-spe">450+</h3>
                        <p>Tree seedings</p>
                    </div>
                    <div class="grids-speci">
                        <h3 class="title-spe">120</h3>
                        <p>Tons of coal not burned</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //specifications -->
    </section> --}}

    @include('includes.public.footer')

    @yield('scripts')
</body>

</html>
