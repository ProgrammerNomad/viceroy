{{-- wat's APP  --}}

<div class="whtcall-mob-btn clearfix">
    <ul>
        <li>
            <a class="phone-top" href="tel:9876543210"><img src="{{ asset('assets/images/pp.png') }}"
                    style="width: 60px; float: left; padding: 4px" /></a>
        </li>
        <li class="whtsup-btn">
            <a
                href="https://api.whatsapp.com/send?phone=919876543210&amp;text=Please%20contact,%20I%20am%20looking%20for%20your%20services%20"><img
                    src="{{ asset('assets/images/ww.png') }}"" style="width: 60px; float: left; padding: 4px" />
            </a>
        </li>
    </ul>
</div>
<footer class="footer">
    <div class="container container_large">
        <div class="row">
            <div class="col-xl-7">
                <div class="footer_left pt_50 pb_40">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-sm-10 col-md-4 wow fadeInLeft" data-wow-duration="2s">
                            <div class="footer_description">
                                <a class="footer_logo" href="">
                                    <img src="{{ asset('assets/images/logo_1.png') }}" alt="logo"
                                        class="img-fluid w-100" />
                                </a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetu adipiscing elit.
                                    Aenean quis orci sit amet odio maximus sagittis et eu
                                    odio.
                                </p>
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="footer_link">
                                <h4>Navigation</h4>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home </a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('buy') }}">Buy property</a></li>
                                    <li><a href="{{ route('rent') }}">Rent Property</a></li>
                                    <li><a href="{{ route('holiday') }}">Holiday Rental</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s">
                            <div class="footer_link">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('terms&con') }}">Term & Condition</a></li>
                                    <li><a href="{{ route('privacy&poly') }}">Privacy policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-duration="1.5s">
                <div class="footer_right">
                    <h4>Get in Touch with Us</h4>
                    <form action="{{ route('contact.submit') }}" method="post" enctype="">
                        @csrf
                        <div class="row">
                            @include('flash::alert-message')
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="text"name="name" placeholder="your name" />
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="text" placeholder="Last name" />
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="number" name="phone" placeholder="Phone number" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer_form_input">
                                    <input type="text"name="sub" placeholder="subject" />
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="footer_form_input">
                                    <textarea rows="2" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="common_btn footer_btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right wow fadeInUp" data-wow-duration="1.5s">
        <div class="container container_large">
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright_area d-flex flex-wrap justify-content-between">
                        <p>© 2024 Viceroy Realty All Rights Reserved by site</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=============================
      FOOTER END
  ==============================-->

<!--================================
      SCROLL BUTTON START
  =================================-->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!--================================
      SCROLL BUTTON END
  =================================-->

<!--jquery library js-->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!--bootstrap js-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--font-awesome js-->
<script src="assets/js/Font-Awesome.js"></script>
<!--nice-select js-->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!--select-2 js-->
<script src="assets/js/select2.min.js"></script>
<!--slick js-->
<script src="assets/js/slick.min.js"></script>
<!--marquee js-->
<script src="assets/js/jquery.marquee.min.js"></script>
<!--YTPlayer js-->
<script src="assets/js/jquery.youtube-background.min.js"></script>
<!--wow js-->
<script src="assets/js/wow.min.js"></script>
<!--animated barfiller js-->
<script src="assets/js/animated_barfiller.js"></script>
<!--simple-bar-graph js-->
<script src="assets/js/jquery.simple-bar-graph.min.js"></script>
<!--sticky sidebar js-->
<script src="assets/js/sticky_sidebar.js"></script>
<!--summernote js-->
<script src="assets/js/summernote.min.js"></script>
<!--scroll button js-->
<script src="assets/js/scroll_button.js"></script>
<!--main/custom js-->
<script src="assets/js/script.js"></script>

<script type="text/javascript">
    function showDiv(select) {
        if (select.value == 1) {
            document.getElementById("hidden_div").style.display = "block";
        } else {
            document.getElementById("hidden_div").style.display = "none";
        }
    }
    const btn = document.querySelector(".buy_price")
    const price_div = document.querySelector(".adv_search_area2_buy_price")
    btn.addEventListener("click", (() => {
        if (price_div.style.opacity == "0") {
            price_div.style.opacity == "1";
        } else {
            price_div.style.opacity == "0";
        }
    }))
</script>
<script>
    window.addEventListener('scroll', function() {
        var container = document.getElementById('container');
        var scrollPosition = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0]
            .scrollTop;

        if (scrollPosition > window.innerHeight / 1.8) {
            // container.style.top = '11%';
            container.style.position = 'fixed';
            container.style.width = '80vw';

        } else {
            // container.style.top = '70%';
            container.style.width = '80vw';
            container.style.position = 'sticky';


        }
    });
    window.addEventListener('scroll', function() {
        var container2 = document.getElementById('container2');
        var scrollPosition = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0]
            .scrollTop;

        if (scrollPosition > window.innerHeight / 4) {
            container2.style.top = '4.5%';
            container2.style.position = 'fixed';
            container2.style.width = '80vw';
            // container2.style.zIndex = 0;

        } else {
            // container.style.margintop = '60vw';
            container2.style.width = '80vw';
            container2.style.position = 'sticky';
            // container2.style.zIndex = 0;



        }
    });
    const closeBtn = document.querySelector("#close_btn_minmax")
    const close001 = document.querySelector("#close001")
    const select_bedroom_btn = document.querySelector("#select_bedroom_btn")
    const select_price_btn = document.querySelector("#select_price_btn")
    const select_price_btn2 = document.querySelector("#select_price_btn2")
    const select_rooms_btn = document.querySelector("#select_rooms_btn")
    closeBtn.addEventListener("click", (() => {
        // console.log("hello guys");
        // close001.style.visibility = "hidden";
    }))
    const adv_search_icon = document.querySelector(".adv_search_icon")
    const adv_search_icon2 = document.querySelector(".adv_search_icon2")
    const min_max = document.querySelector("#close_btn_minmax")

    select_bedroom_btn.addEventListener('click', (() => {
        console.log("hariom")
        if (close001.style.display == "none") {
            close001.style.display = "block";
            close002.style.display = "none";
        } else {
            close001.style.display = "none"
        }
    }))


    select_price_btn.addEventListener('click', (() => {
        // console.log("hariom")
        if (close002.style.display == "none") {
            close002.style.display = "block";
            close001.style.display = "none";
        } else {
            close002.style.display = "none"
        }
    }))





    select_rooms_btn.addEventListener('click', (() => {

        console.log("hariom")
        if (close003.style.display == "none") {
            close003.style.display = "block";
        } else {
            close003.style.display = "none"
        }
    }))


    select_price_btn2.addEventListener('click', (() => {
        console.log("hariom")
        if (close004.style.display == "none") {
            close004.style.display = "block";
        } else {
            close004.style.display = "none"
        }
    }))


    select_price_btn.addEventListener("click", (() => {
        console.log("hariom2", close001.style.display)
        close001.style.display = "none"

    }))
    select_bedroom_btn.addEventListener("click", (() => {
        console.log("hariom2", close002.style.display)
        close002.style.display = "none"

    }))
    select_rooms_btn.addEventListener("click", (() => {
        console.log("hariom2")
        close004.style.display = "none"

    }))



    select_price_btn2.addEventListener("click", (() => {
        console.log("hariom2")
        close003.style.display = "none"

    }))
    //         const closeBtn = document.querySelector("#close_btn_minmax")
    //     const close009 = document.querySelector("#close009")
    //     const select_bedroom_btn =  document.querySelector("#select_bedroom_btn")
    // closeBtn.addEventListener("click" , (()=>{
    //     console.log("hello guys");
    //     // close001.style.visibility = "hidden";
    // }))
    //     const adv_search_icon = document.querySelector(".adv_search_icon")
    //     const adv_search_icon3 = document.querySelector(".adv_search_icon3")
    //     const min_max = document.querySelector("#close_btn_minmax")

    //     select_bedroom_btn.addEventListener('click',(()=>{
    //         console.log("hariom")
    //         if (close009.style.display == "none"){
    //             close009.style.display = "block";
    //         }
    //         else{ close009.style.display = "none"}
    //         }))
    //         adv_search_icon3.addEventListener("click", (()=>{
    //             console.log("hariom2")
    //     close009.style.display = "none"

    //         }))
</script>

{{-- cart script --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
{{-- <script>
    var APP = APP || {};
    APP.sidecart = (function (APP, $) {
      var $test = $(".test"),
        $sidecart = $(".sidecart"),
        $closeCart = $(".sidecart__close"),
        $cartOverlay = $(".sidecart__overlay");

      function bindEvents() {
        console.log("sidecart init");

        $(".sidecart__close, .sidecart__overlay, .test-cart").on("click", function () {
          toggleCart();
        });

        $test.find(".test__btn").on("click", function () {
          addItemToCart();
        });
      }

      function toggleCart() {
        $sidecart.toggleClass("sidecart--close");
        $cartOverlay.toggleClass("sidecart__overlay--hide");
      }

      function addItemToCart() {
        var $items = $(".sidecart__items");
        var $emptyText = $(".sidecart__empty-text");
        $items.removeClass("sidecart__items--empty");
        $emptyText.addClass("sidecart__empty-text--hide");

        var $newItem = $("<div class='sidecart__item'>Item</div>");
        $items.append($newItem);
      }

      function init() {
        bindEvents();
      }

      return {
        init: init,
      };
    })(APP, jQuery);
    APP.sidecart.init();
  </script> --}}
