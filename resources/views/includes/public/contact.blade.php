@extends('layouts.newApp')
@section('content')
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<div class="inner-banner">

</div>
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>
            <li><a href="index.html">Home</a> /</li>
            <li>Contact</li>
        </ul>
    </div>
</section>
@if(session('message'))
<div class="card-sub bg-success">
    {{session('message')}}
</div>
@endif
<!-- contacts -->
<section class="contacts-9-main" id="contact">
    <div class="contacts-9">
        <div class="wrapper">
            <h3 class="heading">Contact Us</h3>
            <div class="top-map">
                <div class="partners">
                    <h5>Installation partners</h5>
                    <p> <span class="fa fa-envelope-open-o"></span> <a href="mailto:oracleiykee@gmail.com">
                            oracleiykee@gmail.com</a></p>
                    <p><strong>Toll Free</strong> : <a href="tel:+2348032740517">+2348032740517</a></p>
                    {{-- <div class="hours">
                        <h5>Working Hours</h5>
                        <h6>Solar Service</h6>
                        <p> Monday to Friday 8.00 am - 6.00 pm</p>
                        <p> Saturday and Sunday - Closed</p>
                        <h6 class="margin-top">Customer support</h6>
                        <p> Monday to Friday 8.00 am - 6.00 pm</p>
                        <p> Saturday 10.00 am - 4.00 pm</p>
                        <p> Sunday - Closed</p>
                    </div> --}}
                </div>
                <div class="map-content-9">
                    <div class="cont-details">
                        <h5>Contact</h5>
                        <p>Your satisfaction; Our priority</p>
                        <p class="margin-top"><span class="fa fa-phone"></span> <a
                                href="tel:+2348039710034">+2348039710034</a></p>
                        <p> <span class="fa fa-envelope-open-o"></span> <a href="mailto:info@example.com">
                                frankyantech@yahoo.com</a></p>
                        <h6 class="margin-top"> 167 Nike Lake Rd, Trans-ekulu, Enugu. </h6>
                    </div>
                </div>
                {{-- <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div> --}}
            </div>
            <div class="map-content-9">
                <div class="form">
                    <h5 class="text-center">Fill out the form.</h5>
                    <form action="{{route('address')}}" method="POST" enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <div class="input-grids">
                            <input type="text" id="w3lName" name="fName" placeholder="First Name" required="">
                            <input type="text" name="lName" id="w3lName" placeholder="Last Name" required="">
                            <input type="email" name="lSender" id="w3lSender" placeholder="Email" required="">
                            <input type="number" name="lPhone" id="w3lPhone" placeholder="Phone number" required="">
                            <input type="subject" name="lSubject" id="w3lMessage" placeholder="Subject" required="">
                            {{-- <select class="btn btn-default" name="ext" required>
                                <option selected="">Select Solar Type</option>
                                <option>Solar Purchase</option>
                                <option>Solar Loan</option>
                                <option>Solar Lease</option>
                                <option>Others</option>
                            </select>
                        </div> --}}
                            <div class="input-textarea">
                                <textarea name="lMessage" id="w3lMessage" placeholder="Your Message"
                                    required=""></textarea>
                            </div>
                            <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
@endsection
