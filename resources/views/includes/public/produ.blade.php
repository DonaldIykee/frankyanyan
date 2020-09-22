@extends('layouts.newApp')
@section('content' )
<div class="display-ad" style="margin: 10px auto; display: block; text-align:center;">
    <!---728x90--->

</div>

<div class="inner-banner">

</div>

<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>
            <li><a href="{{route('home.page')}}">Home</a> /</li>
            <li>Products</li>
        </ul>
    </div>
</section>
<section class="w3l-products-2 " id="ecommerce-products">
    <div class="product">
        <div class="wrapper">
            <h3 class="heading">Products</h3>
            <div class="main">
                <div class="grid grid-column-2">
                    @foreach ($products as $product)
                    <div class="column1" style="width: 275px">
                        <a href="{{route('single.product', $product->slug)}}" class="a-block"><img
                                src="{{asset('storage/'. $product->img)}}" style="height: 247px; width:187px"
                                class="img-responsive img-fluid" /></a>
                        <a href="{{route('single.product', $product->slug)}}">
                            <p class="product-para" style="float: none;">{{$product->product_name}} </p>
                        </a>
                        {{-- <a href="#price1">
                            <p class="price">$1,299</p>
                        </a> --}}
                        <a href="{{route('single.product', $product->slug)}}">
                            <p class="paragraph">{{Str::limit($product->product_description, 20)}}</p>
                        </a>
                    </div>
                    @endforeach
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
                            <p class="paragraph">Dolore magna init sed unde aliqua</p>
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
                            <p class="paragraph">Ut init sed unde enim ad minim</p>
                        </a>
                    </div>
                    <div class="column1">
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
                    </div>
                    <div class="column2">
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
                    </div>
                    <div class="column3">
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
                    </div>
                    <div class="column4">
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
                    </div>
                    <div class="column1">
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
                    </div>
                    <div class="column2">
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
                    </div>
                    <div class="column3">
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
                    </div>
                    <div class="column4">
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
            {{$products->links()}}
            {{-- <ul class="pagination">
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
            </ul> --}}
        </div>
    </div>
</section>

@endsection
