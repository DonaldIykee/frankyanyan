@extends('layouts.newApp')
@section('content')

<div class="display-ad" style="margin: 10px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<div class="inner-banner">

</div>
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>
            <li><a href="{{route('home.page')}}">Home</a> /</li>
            <li>Product</li>
        </ul>
    </div>
</section>
<!-- features-photo-7 -->
<section class="features-photo-7">
    <div class="features-photo-7_sur">
        <div class="wrapper">
            <div class="features-photo-7_top">
                <div class="features-photo-7_top-right">
                    <div class="galleryContainer">
                        <div class="gallery">
                            {{-- <img class="galleryImage img-responsive" id="i1" src="../assets/images/e4.jpg" class="img"
                                alt=""> --}}
                            <input type="radio" name="controls" id="c1" checked><img class="galleryImage img-responsive"
                                id="i1" src="{{asset('storage/' . $product->img)}}" class="img" alt="">
                            {{-- <input type="radio" name="controls" id="c2"><img class="galleryImage img-responsive" id="i2"
                                src="assets/images/es2.jpg" class="img" alt="">
                            <input type="radio" name="controls" id="c3"><img class="galleryImage img-responsive" id="i3"
                                src="assets/images/es3.jpg" class="img" alt="">
                            <input type="radio" name="controls" id="c4"><img class="galleryImage img-responsive" id="i4"
                                src="assets/images/es4.jpg" class="img" alt="">
                            <input type="radio" name="controls" id="c5"><img class="galleryImage img-responsive" id="i5"
                                src="assets/images/es5.jpg" class="img" alt=""> --}}
                        </div>
                        {{-- <div class="thumbnails">
                            <label class="thumbnailImage" for="c1"><img src="assets/images/es1.jpg" class="img"
                                    alt=""></label>
                            <label class="thumbnailImage" for="c2"><img src="assets/images/es2.jpg" class="img"
                                    alt=""></label>
                            <label class="thumbnailImage" for="c3"><img src="assets/images/es3.jpg" class="img"
                                    alt=""></label>
                            <label class="thumbnailImage" for="c4"><img src="assets/images/es4.jpg" class="img"
                                    alt=""></label>
                            <label class="thumbnailImage" for="c5"><img src="assets/images/es5.jpg" class="img"
                                    alt=""></label>
                        </div> --}}
                    </div>
                </div>
                <div class="features-photo-7_top-left">
                    <div class="single-right-left simpleCart_shelfItem">
                        <h3>{{$product->product_name}}</h3>
                        {{-- <ul class="rating">
                            <li><span class="fa fa-star"></span></li>
                            <li><span class="fa fa-star"></span></li>
                            <li><span class="fa fa-star"></span></li>
                            <li><span class="fa fa-star"></span></li>
                            <li><span class="fa fa-star-o"></span></li>
                            <li class="">(4.0 out of 5) | 37 customer reviews</li>
                        </ul> --}}
                        {{-- <p>Price :
                            <span class="item_price">$1265.00</span>
                            <del>$165.00</del>
                            <label>Free delivery</label>
                        </p> --}}
                        {{-- <div class="sec-grid-1">
                            <label>Size:</label>
                            <select name="carlist" form="carform">
                                <option value="volvo">10A -<strong>165$</strong></option>
                                <option value="saab">20A -<strong>170$</strong></option>
                                <option value="opel">30A -<strong>185$</strong></option>
                                <option value="opel">40A -<strong>190$</strong></option>
                                <option value="opel">50A -<strong>210$</strong></option>
                            </select>
                        </div> --}}
                        <div class="product-single-w3l">
                            <p>{{$product->product_description}}
                            </p>
                            {{-- <ul>
                                <li>Solar charge controller comes with a big LCD display that can clearly
                                    indicate the status and data, it can be conveniently switched modes and
                                    parameter configuration
                                </li>
                                <li>Solar panel suitable for solar power system, solar street lamp,
                                    smart home, solar light box, intelligent irrigation, camping lantern and
                                    more
                                </li>
                                <li>The solar regulator is only suitable for lead acid batteries: OPEN, AGM,
                                    GEL,
                                    not for nickel hydride, lithium, Li-ions, or other batteries</li>
                                <li>Solar charge Controller
                                </li>
                            </ul> --}}
                        </div>
                        {{-- <a href="ecommerce-cart.html" class="actionbg1">Buy Now </a>
                        <a href="ecommerce-cart.html" class="actionbg">Add to cart <span
                                class="fa fa-shopping-cart"></span></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<!-- //features-photo-7 -->
{{-- <section class="w3l-products-2">
    <div class="product">
        <div class="wrapper">
            <h3 class="heading">Products related to this item</h3>
            <div class="main">
                <div class="grid grid-column-2">
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
                            <p class="paragraph">Sed do eiusmod perspiciatis unde tempor</p>
                        </a>
                    </div>
                    <div class="column2">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e2.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para2">
                            <p class="product-para">$990</p>
                        </a>
                        <a href="#price2">
                            <p class="price">$1,299</p>
                        </a>
                        <a href="#parahraph2">
                            <p class="paragraph">Inci didunt ut perspiciatis unde labore et </p>
                        </a>
                    </div>
                    <div class="column3">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e3.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para3">
                            <p class="product-para">$2,100</p>
                        </a>
                        <a href="#price3">
                            <p class="price">$2,299</p>
                        </a>
                        <a href="#parahraph3">
                            <p class="paragraph">Dolore magna perspiciatis unde aliqua</p>
                        </a>
                    </div>
                    <div class="column4">
                        <a href="ecommerce-single.html" class="a-block"><img src="assets/images/e4.jpg"
                                class="img-responsive img-fluid" /></a>
                        <a href="#para4">
                            <p class="product-para">$99</p>
                        </a>
                        <a href="#price4">
                            <p class="price">$300</p>
                        </a>
                        <a href="#parahraph4">
                            <p class="paragraph">Ut perspiciatis unde enim ad minim</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
@endsection
