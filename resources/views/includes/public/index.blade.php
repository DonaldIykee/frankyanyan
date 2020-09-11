@extends('layouts.app')

@section('content')
@include('includes.public.banner')
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>

{{-- @include('includes.public.features') --}}

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<section class="w3l-products-2" id="ecommerce-products">
    <div class="product">
        <div class="wrapper">
            <h3 class="heading">Products</h3>
            <div class="main">
                <div class="grid grid-column-2">
                    //foreach
                    <div class="column1">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e1.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para1">
                            <p class="product-para">$1,099 </p>
                        </a>
                        <a href="#price1">
                            <p class="price">$1,299</p>
                        </a>
                        <a href="#parahraph1">
                            <p class="paragraph">Sed do dol et init sed unde tempor</p>
                        </a>
                    </div>
                    //endforeach

                    {{-- <div class="column2">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e2.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para2">
                            <p class="product-para">$990</p>
                        </a>
                        <a href="#price2">
                            <p class="price">$1,299</p>
                        </a>
                        <a href="#parahraph2">
                            <p class="paragraph">Inci didunt ut init sed unde labore et </p>
                        </a>
                    </div> --}}
                    {{-- <div class="column3">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e3.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para3">
                            <p class="product-para">$2,100</p>
                        </a>
                        <a href="#price3">
                            <p class="price">$2,299</p>
                        </a>
                        <a href="#parahraph3">
                            <p class="paragraph">Dolore magna init sed unde aliqua</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column4">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e4.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para4">
                            <p class="product-para">$99</p>
                        </a>
                        <a href="#price4">
                            <p class="price">$300</p>
                        </a>
                        <a href="#parahraph4">
                            <p class="paragraph">Ut init sed unde enim ad minim</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column1">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e5.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para1">
                            <p class="product-para">$3,999 </p>
                        </a>
                        <a href="#price1">
                            <p class="price">$5,999</p>
                        </a>
                        <a href="#parahraph1">
                            <p class="paragraph">Quis nostrud init sed unde exerci</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column2">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e6.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para2">
                            <p class="product-para">$1,000</p>
                        </a>
                        <a href="#price2">
                            <p class="price">$2,000</p>
                        </a>
                        <a href="#parahraph2">
                            <p class="paragraph">Aliquip epersp iciatis unde x ea commodo</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column3">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e7.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para3">
                            <p class="product-para">$1,100</p>
                        </a>
                        <a href="#price3">
                            <p class="price">$3,299</p>
                        </a>
                        <a href="#parahraph3">
                            <p class="paragraph">Irure dolor in init sed unde repre</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column4">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e8.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para4">
                            <p class="product-para">$100</p>
                        </a>
                        <a href="#price4">
                            <p class="price">$200</p>
                        </a>
                        <a href="#parahraph4">
                            <p class="paragraph">Henderit init sed unde in voluptate</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column1">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e9.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para1">
                            <p class="product-para">$1,099 </p>
                        </a>
                        <a href="#price1">
                            <p class="price">$1,299</p>
                        </a>
                        <a href="#parahraph1">
                            <p class="paragraph">Sed do dol et init sed unde tempor</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column2">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e10.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para2">
                            <p class="product-para">$990</p>
                        </a>
                        <a href="#price2">
                            <p class="price">$1,299</p>
                        </a>
                        <a href="#parahraph2">
                            <p class="paragraph">Inci didunt ut init sed unde labore et </p>
                        </a>
                    </div> --}}
                    {{-- <div class="column3">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e1.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para3">
                            <p class="product-para">$2,100</p>
                        </a>
                        <a href="#price3">
                            <p class="price">$2,299</p>
                        </a>
                        <a href="#parahraph3">
                            <p class="paragraph">Dolore magna init sed unde aliqua</p>
                        </a>
                    </div> --}}
                    {{-- <div class="column4">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e2.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para4">
                            <p class="product-para">$99</p>
                        </a>
                        <a href="#price4">
                            <p class="price">$300</p>
                        </a>
                        <a href="#parahraph4">
                            <p class="paragraph">Ut init sed unde enim ad minim</p>
                        </a>
                    </div> --}}
                </div>
            </div>
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Start">Start
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Prev">Prev
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link rounded" href="#" aria-label="Next"> Next
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link rounded" href="#" aria-label="End"> End
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

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
<div class="products-4">
    <!-- Products4 block -->
    <div id="products4-block" class="text-center">
        <div class="wrapper">
            <h3 class="heading">Our Projects</h3>
            <input id="tab1" type="radio" name="tabs" checked>
            {{-- <label class="tabtle" for="tab1">All Projects</label> --}}

            <input id="tab2" type="radio" name="tabs">
            {{-- <label class="tabtle" for="tab2">Solar Energy</label> --}}

            <input id="tab3" type="radio" name="tabs">
            {{-- <label class="tabtle" for="tab3">Installation</label> --}}

            <input id="tab4" type="radio" name="tabs">
            {{-- <label class="tabtle" for="tab4">Saving</label> --}}

            <section id="content1" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    //foreach
                    <div class="product">
                        <a href="assets/images/installation.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/installation.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Energy Saving</a></h5>
                            <span class="price">Safety</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    //endforeach
                    {{-- <div class="product">
                        <a href="assets/images/power.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/power.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Solar Energy</a></h5>
                            <span class="price">System</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div> --}}
                    {{-- <div class="product">
                        <a href="assets/images/solar.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/solar.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Green technology</a></h5>
                            <span class="price">Energy</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/green.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/green.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Wind Energy</a></h5>
                            <span class="price">Installation</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/solarhome.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/solarhome.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Renewable Energy</a></h5>
                            <span class="price">Operations</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/installation.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/installation.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Home Solar</a></h5>
                            <span class="price">Maintenance</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/panel.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/panel.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Solar Systems</a></h5>
                            <span class="price">Engineering and Design</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/start.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/start.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Wind Turbines</a></h5>
                            <span class="price">Solar service</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div> --}}
                </div>
            </section>

            {{-- <section id="content2" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/panel.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/panel.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Wind Energy</a></h5>
                            <span class="price">Energy Saving</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/green.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/green.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Renewable Energy</a></h5>
                            <span class="price">Solar Maintenance</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/solarhome.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/solarhome.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Home Solar</a></h5>
                            <span class="price">Installation</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/power.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/power.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Affordable heating </a></h5>
                            <span class="price">Wind Turbines</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/start.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/start.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Water Enegry</a></h5>
                            <span class="price">Wind Energy</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="content3" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/solarhome.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/solarhome.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Affordable heating </a></h5>
                            <span class="price">Renewable Energy</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/installation.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/installation.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Water Enegry</a></h5>
                            <span class="price">Solar Power</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/solar.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/solar.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Solar Panels</a></h5>
                            <span class="price">Green Technology</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="content4" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/installation.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/installation.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Solar Installation</a></h5>
                            <span class="price">Energy Saving</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="assets/images/solarhome.jpg" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="assets/images/solarhome.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="#Projects">Solar Systems</a></h5>
                            <span class="price">Wind Solar</span>
                            <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id nisl.</p>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
    </div>
    <!-- Products4 block -->
</div>
<!-- form 29 block -->
<section class="forms-29">
    <div class="form-29">
        <div class="wrapper">
            <h3 class="heading">Keep in Touch with us</h3>
            <div class="form-main-cont-29">
                <div class="content-29-form d-grid">
                    <div class="content-left">
                        <h4 class="">Call <a href="tel:+7-800-999-800">+234 8039710034</a> now to get a free
                            quote or fill out the form</h4>
                        <p>We will get back to you shortly. Thank you for contacting us.</p>
                    </div>
                    <form action="#" method="post" class="forms-29-form">
                        <input type="text" name="name" placeholder="First Name" required>
                        <input type="text" name="name" placeholder="Last Name" required>
                        <input type="number" name="phone" placeholder="Phone Number" required>
                        {{-- <input type="number" name="zipcode" placeholder="Zip Code" required> --}}
                        <input type="email" name="email" placeholder="Your email" required>
                        <button type="submit" class="btn">Request Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
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
@endsection
