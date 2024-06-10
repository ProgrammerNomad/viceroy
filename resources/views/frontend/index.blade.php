@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection
{{-- @section('style')
    <style>
        .banner_area div {
    height: 100%;
    color: red;
}

    </style>
@endsection --}}

@section('content')
    <section class="banner_area" style="background: url(assets/images/banner_bg.jpg)">
        <div class="container container_large">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-11 col-xxl-9">
                    <div class="banner_contant">
                        <div class="banner_text">
                            <h1>Building houses that feel like home - with us.</h1>
                            <p>
                                Through a combination of lectures, readings, and discussions,
                                students will gain a solid foundation in educational
                                psychology.
                            </p>
                        </div>
                        <div class="sticky" id="container">
                            <div class="tab-content" id="pills-tabContent">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">
                                            Buy
                                        </button>
                                    </li>
                                    <!--<li class="nav-item" role="presentation">
                                                                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                                                              data-bs-target="#pills-profile" type="button" role="tab"
                                                                                              aria-controls="pills-profile" aria-selected="false">Sell</button>
                                                                                      </li>-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">
                                            Rent
                                        </button>
                                    </li>
                                </ul>

                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <form action="#">
                                        <div class="" id="home_form">
                                            <div class="home_form_label">
                                                <label>Country</label>
                                                <select class="select_label" name="co_name" id="co_name" required focus>
                                                    <option value="" disabled selected> select country</option>
                                                    @foreach ($countrys as $country)
                                                        <option value="{{ $country->id }}">{{ $country->co_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="home_form_label">
                                                <label>City</label>
                                                <select class="select_label" name="ct_name" id="city" required>
                                                    <option value="" disabled selected> select city</option>
                                                    @foreach ($citys as $city)
                                                        <option value="{{ $city->id }}">{{ $city->ct_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="home_form_label">
                                                <label>Bedrooms</label>
                                                <div class="adv_search_icon" id="select_bedroom_btn">
                                                    <input class="select_label select_bedroom_btn" name="state"
                                                        type="button" value="Select bedrooms">
                                                    {{-- <option value="">Select bedrooms</option>
                                                        @foreach ($uniqueBedrooms as $bedroom)
                                                            <option value="{{ $bedroom }}">{{ $bedroom }}</option>
                                                        @endforeach --}}
                                                    </input>
                                                </div>

                                                <div class="adv_search_area show_search1" id="close001">
                                                    <div id="close_btn_minmax" class="adv_search_close adv_search_close_1">
                                                        <i class="fal fa-times"></i>
                                                    </div>

                                                    <div id="min_max">
                                                        <select class="select_2" name="state">
                                                            <option value="">Min</option>
                                                            <option value="">01</option>
                                                            <option value="">02</option>
                                                            <option value="">03</option>
                                                            <option value="">04</option>
                                                            <option value="">05</option>
                                                        </select>

                                                        <select class="select_2" name="state">
                                                            <option value="">Max</option>
                                                            <option value="">01</option>
                                                            <option value="">02</option>
                                                            <option value="">03</option>
                                                            <option value="">04</option>
                                                            <option value="">05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="home_form_label">
                                                <label>Price</label>
                                                <div class="adv_search_icon2" id="select_price_btn">
                                                    <input class="select_label select_bedroom_btn" name="state"
                                                        type="button" value="Select price">
                                                    {{-- @foreach ($uniquePrices as $price)
                                                            <option value="{{ $price }}">{{ $price }}</option>
                                                        @endforeach --}}
                                                    </input>
                                                </div>
                                                <div class="adv_search_area show_search2" id="close002">
                                                    <div id="close_btn_minmax" class="adv_search_close adv_search_close">
                                                        <i class="fal fa-times"></i>
                                                    </div>

                                                    <div id="min_max2">
                                                        <select class="select_2" name="state">
                                                            <option value="">Min</option>
                                                            <option value="">01</option>
                                                            <option value="">02</option>
                                                            <option value="">03</option>
                                                            <option value="">04</option>
                                                            <option value="">05</option>
                                                        </select>

                                                        <select class="select_2" name="state">
                                                            <option value="">Max</option>
                                                            <option value="">01</option>
                                                            <option value="">02</option>
                                                            <option value="">03</option>
                                                            <option value="">04</option>
                                                            <option value="">05</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- <div class="adv_search_area2">
                                                     <div class="adv_search_close2">
                                                                          <i class="fal fa-times"></i>
                                                                        </div>

                                                    <div class="" id="min_max2">
                                                        <div class="">
                                                            <select class="select_2" name="state">
                                                                <option value="">Min</option>
                                                                <option value="">01</option>
                                                                <option value="">02</option>
                                                                <option value="">03</option>
                                                                <option value="">04</option>
                                                                <option value="">05</option>
                                                            </select>
                                                        </div>
                                                        <div class="">
                                                            <select class="select_2" name="state">
                                                                <option value="">Max</option>
                                                                <option value="">01</option>
                                                                <option value="">02</option>
                                                                <option value="">03</option>
                                                                <option value="">04</option>
                                                                <option value="">05</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>

                                            <div class="home_form_label ">
                                                <label>Property Type</label>
                                                <select class="select_label " name="state">
                                                    <option value="">Select property</option>
                                                    @foreach ($uniquePropertyTypes as $type)
                                                        <option value="{{ $type }}">{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="home_form_label">
                                                <label>Currency</label>
                                                <select class="select_label" name="code">
                                                    <option value="" disabled selected> select currency</option>
                                                    @foreach ($currencys as $currency)
                                                        <option value="{{ $currency->id }}">{{ $currency->code }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="">
                                                <button class="common_btn banner_input_btn" type="submit"
                                                    style="width: 100%; margin-top: 30px">
                                                    search
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                    <form action="{{ route('home') }}" method="GET">
                                        <div class="" id="home_form">
                                            <div class="home_form_label">
                                                <label>Country</label>
                                                <select class="select_label" name="co_name" id="co_name" required
                                                    focus>
                                                    <option value="" disabled selected> select country</option>
                                                    @foreach ($countrys as $country)
                                                        <option value="{{ $country->id }}">{{ $country->co_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                </select>
                                            </div>
                                            <div class="home_form_label">
                                                <label>City</label>
                                                <select class="select_label" name="ct_name" id="city" required>
                                                    <option value="" disabled selected> select city</option>
                                                    @foreach ($citys as $city)
                                                        <option value="{{ $city->id }}">{{ $city->ct_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="home_form_label">
                                                <label>Rooms</label>
                                                <div class="adv_search_icon3" id="select_rooms_btn">
                                                    <input type = "button" value = "Select Rooms" class="select_label"
                                                        name="state">
                                                    <!-- <option value="">Select rooms</option>
                                                                                @foreach ($uniqueBedrooms as $bedroom)
    <option value="{{ $bedroom }}">{{ $bedroom }}
                                                                                    </option>
    @endforeach -->
                                                    </select>
                                                </div>
                                                <div class="adv_search_area" id= "close003">
                                                    <div class="adv_search_close3">
                                                        <i class="fal fa-times"></i>
                                                    </div>

                                                    <div class="" id="min_max3">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <select class="select_2" name="state">
                                                                <option value="">Min</option>
                                                                <option value="">01</option>
                                                                <option value="">02</option>
                                                                <option value="">03</option>
                                                                <option value="">04</option>
                                                                <option value="">05</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <select class="select_2" name="state">
                                                                <option value="">Max</option>
                                                                <option value="">01</option>
                                                                <option value="">02</option>
                                                                <option value="">03</option>
                                                                <option value="">04</option>
                                                                <option value="">05</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="home_form_label">
                                                <label>Price</label>
                                                <div class="adv_search_icon4" id="select_price_btn2">
                                                    <input type = "button" value= "Select Price" class="select_label"
                                                        name="state">
                                                    <!-- <option value="">Select price</option>
                                                                                @foreach ($uniquePrices as $price)
    <option value="{{ $price }}">{{ $price }}
                                                                                    </option>
    @endforeach -->
                                                    </input>
                                                </div>
                                                <div class="adv_search_area4" id="close004">
                                                    <div class="adv_search_area4">
                                                        <i class="fal fa-times"></i>
                                                    </div>

                                                    <div class="" id="min_max4">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <select class="select_2" name="state">
                                                                <option value="">Min</option>
                                                                <option value="">01</option>
                                                                <option value="">02</option>
                                                                <option value="">03</option>
                                                                <option value="">04</option>
                                                                <option value="">05</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <select class="select_2" name="state">
                                                                <option value="">Max</option>
                                                                <option value="">01</option>
                                                                <option value="">02</option>
                                                                <option value="">03</option>
                                                                <option value="">04</option>
                                                                <option value="">05</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="home_form_label">
                                                <label>Property Type</label>
                                                <select class="select_label" name="state">
                                                    <option value="">Select property</option>
                                                    @foreach ($uniquePropertyTypes as $type)
                                                        <option value="{{ $type }}">{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="home_form_label">
                                                <label>Currency</label>
                                                <select class="select_label" name="code">
                                                    <option value="" disabled selected> select currency</option>
                                                    @foreach ($currencys as $currency)
                                                        <option value="{{ $currency->id }}">{{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="">
                                                <button class="common_btn banner_input_btn" type="submit"
                                                    style="width: 100%; margin-top: 30px">
                                                    search
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                        BANNER END
                                                    ==============================-->

    <!--=============================
                                                        ABOUT START
                                                    ==============================-->
    <section class="about_area pt_120 xs_pt_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-sm-6 wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="about_area_img_1">
                                <img src="assets/images/about_1.jpg" alt="img" class="img-fluid w-100" />
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="about_area_img_2 wow fadeInUp" data-wow-duration="1.5s">
                                <img src="assets/images/about_2.jpg" alt="img" class="img-fluid w-100" />
                            </div>
                            <div class="about_area_img_3 wow fadeInUp" data-wow-duration="1.5s">
                                <img src="assets/images/about_3.jpg" alt="img" class="img-fluid w-100" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="about_text">
                        <div class="section_heading section_heading_left">
                            <h2>We help clients buy and Sell houses since 2001</h2>
                        </div>
                        <p>
                            Through a combination of lectures, readings, and discussions,
                            students will gain a solid foundation in educational psychology
                            With over $3 Billion in sales, due to our unparalleled results,
                            expertise and dedication.
                        </p>
                        <ul class="d-flex flex-wrap pt_15">
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_1.png" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="about_description">
                                    <h6>Sell your home</h6>
                                    <span>Free Services</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_2.png" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="about_description">
                                    <h6>Buy a home</h6>
                                    <span>No fees asked</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_3.png" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="about_description">
                                    <h6>Free Appraisal</h6>
                                    <span>No fees asked</span>
                                </div>
                            </li>
                            <li>
                                <div class="about_icon">
                                    <img src="assets/images/about_icon_4.png" alt="icon" class="img-fluid w-100" />
                                </div>
                                <div class="about_description">
                                    <h6>Free Photoshoot</h6>
                                    <span>Professional services</span>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="common_btn">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                        ABOUT END
                                                    ==============================-->

    <!--=============================
                                                        DESTINATION START
                                                    ==============================-->
    <section class="destination_area pt_115 xs_pt_110 pb_60 xs_pb_90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_50">
                        <h2>Explore Your Neighborhood</h2>
                    </div>
                </div>
            </div>
            <div class="row destination_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_1.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>New York</h5>
                                <p>04 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_2.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>Colombia</h5>
                                <p>03 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_3.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>San Francisco</h5>
                                <p>02 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_4.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>United States</h5>
                                <p>05 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_5.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>Argentina</h5>
                                <p>06 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_1.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>New York</h5>
                                <p>04 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_2.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>Colombia</h5>
                                <p>03 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_3.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>San Francisco</h5>
                                <p>02 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_4.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>United States</h5>
                                <p>05 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="single_destination">
                        <img src="assets/images/destination_5.jpg" alt="img" class="img-fluid w-100" />
                        <div class="destination_address">
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                            <div class="destination_text">
                                <h5>Argentina</h5>
                                <p>06 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                        DESTINATION END
                                                    ==============================-->

    <!--=============================
                                                        PROPERTY START
                                                    ==============================-->
    <section class="property_area pt_60 xs_pt_95 pb_50 xs_pb_95">
        <div class="container">
            <div class="row justify-content-center text-align-center">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_25">
                        <h2>Check Out the Latest Real Estate Listings.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($propertys as $property)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="single_property">
                            <div class="single_property_img">
                                @php
                                    $images = unserialize($property->image);
                                @endphp
                                @if (!empty($images) && is_array($images) && count($images) > 0)
                                    <img src="{{ asset('public/' . $images[0]) }}" alt="Image"
                                        class="img-fluid w-100">
                                @else
                                    <p>No images available</p>
                                @endif
                                <a class="feature_link" href="">for {{ $property->type }}</a>
                                @if ($property->featured)
                                    <a class="feature_link feature" href="#">Featured</a>
                                @endif
                                <ul class="d-flex flex-wrap">
                                    {{-- <li>
                                        <a href="#"><i class="fas fa-heart" aria-hidden="true"></i> SAVE</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="single_property_text">
                                <div class="single_property_top">
                                    <a class="item_title" href="">{{ $property->title }}</a>
                                    <p>
                                        <i class="fas fa-map-marker-alt"></i>{{ $property->address }}
                                    </p>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <span><img src="assets/images/bad.png" alt="img"
                                                    class="img-fluid w-100" /></span>
                                            {{ $property->bed }} Beds
                                        </li>
                                        <li>
                                            <span><img src="assets/images/bathtab.png" alt="img"
                                                    class="img-fluid w-100" /></span>
                                            {{ $property->number_bathroom }} Baths
                                        </li>
                                        <li>
                                            <span><img src="assets/images/squre.png" alt="img"
                                                    class="img-fluid w-100" /></span>
                                            {{ $property->area }} Sq Ft
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                    <a class="read_btn" href="{{ route('property', $property->slag) }}">More Details<i
                                            class="fas fa-arrow-right"></i></a>
                                    {{-- <p>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.5</span>
                                    </p> --}}
                                </div>
                                <span class="property_price">$ {{ $property->price }}</span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_property">
                                <div class="single_property_img">
                                    <img src="assets/images/property_2.jpg" alt="img" class="img-fluid w-100" />
                                    <a class="feature_link" href="#">for sale</a>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="#"><i class="fas fa-heart" aria-hidden="true"></i> SAVE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="#">Leisure Beautiful Health</a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                            London
                                        </p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                3 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                2 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                1500 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="#">More Details<i class="fas fa-arrow-right"></i></a>
                                        <p>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.5</span>
                                        </p>
                                    </div>
                                    <span class="property_price">$8,000</span>
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_property">
                                <div class="single_property_img">
                                    <img src="assets/images/property_3.jpg" alt="img" class="img-fluid w-100" />
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="#"><i class="fas fa-heart" aria-hidden="true"></i> SAVE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="#">South Side Garden House</a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                            London
                                        </p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                5 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                4 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                2300 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="#">More Details<i class="fas fa-arrow-right"></i></a>
                                        <p>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.5</span>
                                        </p>
                                    </div>
                                    <span class="property_price">$29,000</span>
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_property">
                                <div class="single_property_img">
                                    <img src="assets/images/property_4.jpg" alt="img" class="img-fluid w-100" />
                                    <a class="feature_link" href="#">for sale</a>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="#"><i class="fas fa-heart" aria-hidden="true"></i> SAVE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="#">Stunning mansion in Reno</a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                            London
                                        </p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                6 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                4 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                2500 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="#">More Details<i class="fas fa-arrow-right"></i></a>
                                        <p>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.5</span>
                                        </p>
                                    </div>
                                    <span class="property_price">$24,000</span>
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_property">
                                <div class="single_property_img">
                                    <img src="assets/images/property_5.jpg" alt="img" class="img-fluid w-100" />
                                    <a class="feature_link" href="#">for rent</a>
                                    <a class="feature_link feature" href="#">Featured</a>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="#"><i class="fas fa-heart" aria-hidden="true"></i> SAVE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="#">Beautiful Condo in London</a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                            London
                                        </p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                4 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                3 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                2200 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="#">More Details<i class="fas fa-arrow-right"></i></a>
                                        <p>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.5</span>
                                        </p>
                                    </div>
                                    <span class="property_price">$9,000</span>
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="single_property">
                                <div class="single_property_img">
                                    <img src="assets/images/property_6.jpg" alt="img" class="img-fluid w-100" />
                                    <a class="feature_link" href="#">for rent</a>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="#"><i class="fas fa-heart" aria-hidden="true"></i> SAVE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single_property_text">
                                    <div class="single_property_top">
                                        <a class="item_title" href="#">Kolte Patil Life Republic</a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>28B Highgate Road,
                                            London
                                        </p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <span><img src="assets/images/bad.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                3 Beds
                                            </li>
                                            <li>
                                                <span><img src="assets/images/bathtab.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                3 Baths
                                            </li>
                                            <li>
                                                <span><img src="assets/images/squre.png" alt="img"
                                                        class="img-fluid w-100" /></span>
                                                2100 Sq Ft
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                        <a class="read_btn" href="#">More Details<i class="fas fa-arrow-right"></i></a>
                                        <p>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.5</span>
                                        </p>
                                    </div>
                                    <span class="property_price">$11,000</span>
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="text-center mt_50 wow fadeInUp" data-wow-duration="1.5s">
                            <a class="common_btn" href="#">Browse More Properties</a>
                        </div> --}}
                @endforeach
                <div style="text-align: center">
                    {!! $featureds->links() !!}
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                        PROPERTY END
                                                    ==============================-->

    <!--=============================
                                                        AGENT START
                                                    ==============================-->
    <section class="agent_area pt_60 xs_pt_95 pb_70 xs_pb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="section_heading mb_25">
                        <h2>Meet the Realty Professionals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($professionals as $professional)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="single_agent">
                            <div class="single_agent_img">
                                @if ($professional->image)
                                <li>
                                    <a href="agencies_details.html">
                                        <img src="{{ asset('public/images/' . $professional->image) }}" alt="img"
                                            class="img-fluid w-100" />
                                    </a>
                                </li>
                            @else
                                No Image
                            @endif
                                <div class="single_agent_overly">
                                    {{-- <p>4 listings</p> --}}
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
                            <div class="agent_text">
                                <div class="agent_name">
                                    <a class="item_title" href="">{{ $professional->name }}</a>
                                    <span>{{ $professional->post }}</span>
                                </div>
                                <ul class="agent_contact">
                                    <li>
                                        <a href="callto:1234567890"><i class="fas fa-phone-alt"></i>(+88) {{ $professional->number }}</a>
                                    </li>
                                    <li>
                                        <a href=""><i
                                                class="fas fa-envelope"></i>{{ $professional->email }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_agent">
                                    <div class="single_agent_img">
                                        <img src="assets/images/agent_2.jpg" alt="img" class="img-fluid w-100" />
                                        <div class="single_agent_overly">
                                            <p>03 listings</p>
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
                                    <div class="agent_text">
                                        <div class="agent_name">
                                            <a class="item_title" href="#">Nathaneal Down</a>
                                            <span>Real Estate Broker</span>
                                        </div>
                                        <ul class="agent_contact">
                                            <li>
                                                <a href="callto:1234567890"><i class="fas fa-phone-alt"></i>(+88) 587 - 5643</a>
                                            </li>
                                            <li>
                                                <a href="mailto:example@gmail.com"><i
                                                        class="fas fa-envelope"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                    {{-- <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_agent">
                                    <div class="single_agent_img">
                                        <img src="assets/images/agent_3.jpg" alt="img" class="img-fluid w-100" />
                                        <div class="single_agent_overly">
                                            <p>6 listings</p>
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
                                    <div class="agent_text">
                                        <div class="agent_name">
                                            <a class="item_title" href="#">Hugh Saturation</a>
                                            <span>Buying Agent</span>
                                        </div>
                                        <ul class="agent_contact">
                                            <li>
                                                <a href="callto:1234567890"><i class="fas fa-phone-alt"></i>(+88) 587 - 5643</a>
                                            </li>
                                            <li>
                                                <a href="mailto:example@gmail.com"><i
                                                        class="fas fa-envelope"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                    {{-- <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1.5s">
                                <div class="single_agent">
                                    <div class="single_agent_img">
                                        <img src="assets/images/agent_4.jpg" alt="img" class="img-fluid w-100" />
                                        <div class="single_agent_overly">
                                            <p>10 listings</p>
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
                                    <div class="agent_text">
                                        <div class="agent_name">
                                            <a class="item_title" href="#">Lance Bogrol</a>
                                            <span>Sales Executive</span>
                                        </div>
                                        <ul class="agent_contact">
                                            <li>
                                                <a href="callto:1234567890"><i class="fas fa-phone-alt"></i>(+88) 587 - 5643</a>
                                            </li>
                                            <li>
                                                <a href="mailto:example@gmail.com"><i
                                                        class="fas fa-envelope"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                @endforeach
            </div>

        </div>

    </section>
    <!--=============================
                                                        AGENT END
                                                    ==============================-->

    <!--=============================
                                                        FIND STATE START
                                                    ==============================-->
    <section class="find_state" style="background: url(assets/images/find_state.jpg)">
        <div id="vbg12" data-vbg-loop="true" data-vbg="https://youtu.be/ec_fXMrD7Ow?si=m9LJu9X3lzTP5Erz"></div>
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-12">
                    <div class="find_state_text">
                        <h2>Residential</h2>
                        <a href="#">Discover The Project<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                        FIND STATE END
                                                    ==============================-->

    <!--=============================
                                                        BLOG START
                                                    ==============================-->

    <!--=============================
                                                        BLOG END
                                                    ==============================-->

    <!--=============================
                                                        DISCOVER START
                                                    ==============================-->

    <!--=============================
                                                        PARTNER START
                                                    ==============================-->
    <section class="partner_area pt_30 pb_30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 wow fadeInUp" data-wow-duration="1.5s"
                    style="
              visibility: visible;
              animation-duration: 1.5s;
              animation-name: fadeInUp;
            ">
                    <div class="section_heading mb_25">
                        <h2>Our Brands</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-12">
                    <div class="marquee_animi">
                        <ul class="single_partner">
                            @foreach ($brands as $brand)
                                @if ($brand->image)
                                    <li>
                                        <a href="agencies_details.html">
                                            <img src="{{ asset('public/images/' . $brand->image) }}" alt="img"
                                                class="img-fluid w-100" />
                                        </a>
                                    </li>
                                @else
                                    No Image
                                @endif
                            @endforeach
                            {{-- <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_3.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_4.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_5.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_6.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_7.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_8.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_9.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li>
                            <li>
                                <a href="agencies_details.html"><img src="assets/images/partner_10.png" alt="img"
                                        class="img-fluid w-100" /></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#co_name').change(function() {
                var country = $(this).val();

                $.ajax({
                    type: 'GET',
                    url: '{{ route('fetch-city') }}',
                    data: {
                        country: country
                    },
                    success: function(result) {
                        console.log(result);
                        $("#city").html(result);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#co_name').change(function() {
                var country = $(this).val();

                $.ajax({
                    type: 'GET',
                    url: '{{ route('fetch-city') }}',
                    data: {
                        country: country
                    },
                    success: function(result) {
                        console.log(result);
                        $("#city").html(result);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
