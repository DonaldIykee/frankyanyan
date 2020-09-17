<!-- footer17 -->
<section class="footer-17">
    <div class="footer17_sur">
        <div class="wrapper">
            <div class="footer17-top">
                <div class="footer17-top-left1_sur">
                    <h5><a href="index.html"><span class="fa fa-scribd" aria-hidden="true"></span>FRANKYAN</a>
                    </h5>
                    <p>167 Nike lake Rd, Transekulu, Enugu</p>
                    <a href="tel:+2348075416014">+2348075416014</a>
                    <a href="tel:+2348039710034">+2348039710034</a>
                    <p><em>frankyantech@yahoo.com</em></p>
                    <ul class="footers-17_social">
                        {{-- <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li> --}}
                        {{-- <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li> --}}
                    </ul>
                </div>
                <div class="footer17-top-left2_sur">
                    <h6>Products</h6>
                    <ul>
                        <li><a href="{{route('public.services')}}">Solar system</a></li>
                        {{-- <li><a href="services.html">Renewable energy</a></li>
                        <li><a href="services.html">Home improvements</a></li>
                        <li><a href="services.html">Solar Electric(PV)</a></li>
                        <li><a href="services.html">Roof installation</a></li> --}}
                    </ul>
                </div>
                <div class="footer17-top-left3_sur">
                    <h6>Company</h6>
                    <ul>
                        <li><a href="{{route('public.about')}}">About Us</a></li>
                        <li><a href="{{route('pro')}}">Our Products</a></li>
                    </ul>
                </div>
                <div class="footer17-top-left4_sur">
                    <h6>More links</h6>
                    <ul>
                        <li><a href="{{route('public.services')}}">What we do</a></li>
                        <li><a href="{{route('public.about')}}">How it works</a></li>
                    </ul>
                </div>
                <div class="footer17-top-left5_sur">
                    <h6>Legal </h6>
                    <ul>
                        <li><a href="#url">Privacy policy</a></li>
                        <li><a href="#url">Terms of use</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //footer17 -->

<!-- copyright -->
{{-- <div class="copyright text-center">
    <div class="wrapper">
        <p class="copy-footer-29">© 2019 Solar Service. All rights reserved | Designed by <a
                href="https://w3layouts.com" target="_blank">W3layouts</a></p>
    </div>
</div> --}}
<!-- //copyright -->


<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
</script>
<!-- /move top -->
