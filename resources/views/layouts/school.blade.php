<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Home </title>
    <meta name="author" content="themeholy">
    <meta name="description" content="Edura - Online Courses & Education HTML Template">
    <meta name="keywords" content="Edura - Online Courses & Education HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/school/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('public/school/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('public/school/assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('public/school/assets/css/slick.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('public/school/assets/css/nice-select.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/school/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/school/custom/custom.css') }}">

</head>

<body>
    @php
        $school_contents = DB::table('school_contents')->first();
    @endphp


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
  ==============================-->
    {{-- <div class="preloader ">
        <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> --}}
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_1.jpg" alt="Cart Image">Plastic Book Bags</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_2.jpg" alt="Cart Image">The Genie Mind</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_3.jpg" alt="Cart Image">The Energy Book</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_4.jpg" alt="Cart Image">Pencil Bag</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_5.jpg" alt="Cart Image">Sharpner</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="th-btn wc-forward">View cart</a>
                        <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle" style="margin-right: 10px;"><i class="fal fa-times"></i></button>
            <div class="mobile-logo py-2 bg-theme">
                <a href="index.html"><img src="{{ asset($school_contents->school_logo) }}" style="height: 70px;border-radius:50%" alt="{{ env('APP_NAME') }}"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li >
                        <a href="index.html" style="color:#030303">হোম</a>
                        
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" style="color:#030303">পরিচিতি</a>
                        <ul class="sub-menu">
                            <li><a href="course.html">এক নজরে পরিচিতি </a></li>
                            <li><a href="course-details.html">সংক্ষিপ্ত ইতিহাস </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" style="color:#030303">জনবল </a>
                        <ul class="sub-menu">
                            <li><a href="course.html">শিক্ষক শিক্ষিকা</a></li>
                            <li><a href="course-details.html">অন্যান্য কর্মচারী</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" style="color:#030303">শিক্ষার্থী</a>
                        <ul class="sub-menu">
                            <li><a href="course.html">অধ্যয়নরত শিক্ষার্থীর সংখ্যা</a></li>
                            <li><a href="course-details.html">অধ্যয়নরত শিক্ষার্থীর তলিকা</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" style="color:#030303">পরীক্ষার ফলাফল</a>
                        <ul class="sub-menu">
                            <li><a href="course.html">পাবলিক পরীক্ষা</a></li>
                            {{-- <li><a href="course-details.html">Course Details</a></li> --}}
                        </ul>
                    </li>
                    <li>
                        <a href="#" style="color:#030303">ছবির গ্যালারী</a>
                    </li>
                    {{-- <li class="menu-item-has-children">
                        <a href="#" style="color:#ffffff">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="event.html">Events</a></li>
                            <li><a href="event-details.html">Event Details</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" style="color:#ffffff">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="contact.html" style="color:#030303">যোগাযোগ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout3">
        <div class="row" style="padding:0px 11.8px;background-color:#ffffff">
            <div class="col-lg-3 col-md-3 col-sm-2 mx-auto pt-2" id="school-logo" style="background-color:#ebf2fc">
                <img  src="{{ asset($school_contents->school_logo) }}" style="height: 100px;float:right;border-radius:50%" alt="Edura">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-10 mx-auto pt-4 text-center" id="school-title" style="background-color:#ebf2fc">
                
                <h4>মিরজাগঞ্জ বহুমুখী উচ্চ বিদ্যালয়, ডোমার,নীলফামারী</h4>
                <p><strong>EIIN : 124834</strong> , <strong >স্থাপিত : ১৯৩৬ ইং</strong></p>
            </div>
        </div>
        {{-- <div class="sticky-wrapper" style="background-color: #f3eaea;">
            <!-- Main Menu Area -->
            <div class="container th-container2" >
                <div class="menu-area py-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto d-none">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{ asset('public/school/assets/img/logo-white.svg') }}" alt="Edura"></a><br>
                            </div>
                        </div>
                        
                        <div class="col-auto" style="color:white">
                            <nav class="main-menu d-lg-inline-block">
                                
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <img style="border-radius: 5px" src="{{ asset('public/school/assets/img/mb.jpg') }}" alt="Edura">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"  style="background-color: #006a4e;">
                
            </div>
        </div> --}}
        <div class="sticky-wrapper" style="background-color: #006a4e;">
            <!-- Main Menu Area -->
            <div class="container th-container2" >
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto" style="margin-left:20px">
                            <div class="header-logo" id="header-logo">
                                <a href="index.html"><img src="{{ asset($school_contents->school_logo) }}" style="height:70px;border-radius:50%" alt="Edura"></a><br>
                            </div>
                        </div>
                        
                        <div class="col-auto" style="color:white">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li >
                                        <a href="index.html" style="color:#ffffff">হোম</a>
                                        
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" style="color:#ffffff">পরিচিতি</a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html">এক নজরে পরিচিতি </a></li>
                                            <li><a href="course-details.html">সংক্ষিপ্ত ইতিহাস </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" style="color:#ffffff">জনবল </a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html">শিক্ষক শিক্ষিকা</a></li>
                                            <li><a href="course-details.html">অন্যান্য কর্মচারী</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" style="color:#ffffff">শিক্ষার্থী</a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html">অধ্যয়নরত শিক্ষার্থীর সংখ্যা</a></li>
                                            <li><a href="course-details.html">অধ্যয়নরত শিক্ষার্থীর তলিকা</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" style="color:#ffffff">পরীক্ষার ফলাফল</a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html">পাবলিক পরীক্ষা</a></li>
                                            {{-- <li><a href="course-details.html">Course Details</a></li> --}}
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" style="color:#ffffff">ছবির গ্যালারী</a>
                                    </li>
                                    {{-- <li class="menu-item-has-children">
                                        <a href="#" style="color:#ffffff">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="event.html">Events</a></li>
                                            <li><a href="event-details.html">Event Details</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" style="color:#ffffff">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li>
                                        <a href="contact.html" style="color:#ffffff">যোগাযোগ</a>
                                    </li>
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none bg-theme2" style="margin-right: 30px"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                {{-- <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                                <a href="wishlist.html" class="icon-btn">
                                    <i class="far fa-heart"></i>
                                    <span class="badge">3</span>
                                </a>
                                <button type="button" class="icon-btn sideMenuToggler">
                                    <i class="far fa-shopping-cart"></i>
                                    <span class="badge">5</span>
                                </button> --}}
                                {{-- <a href="contact.html" class="th-btn ml-25" style="background-color:#f42a41;">Login/Register</a> --}}
                                <img style="border-radius: 5px" src="{{ asset('public/school/assets/img/mb.jpg') }}" alt="Edura">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"  style="background-color: #006a4e;">
                
            </div>
        </div>
    </header>
    <!--==============================
Hero Area
==============================-->
    @yield('content')
    <!--==============================
	Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout-2" data-bg-src="{{ asset('public/school/assets/img/bg/footer-bg.png')}}">
        <div class="shape-mockup footer-shape1 jump" data-left="60px" data-top="70px">
            <img src="{{ asset('public/school/assets/img/normal/footer-bg-shape1.png')}}" alt="img">
        </div>
        <div class="shape-mockup footer-shape2 jump-reverse" data-right="80px" data-bottom="120px">
            <img src="{{ asset('public/school/assets/img/normal/footer-bg-shape2.png')}}" alt="img">
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xxl-3 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="{{ asset($school_contents->school_logo) }}" style="height: 100px;border-radius:50%" alt="Edura"></a>
                                </div>
                                {{-- <p class="about-text">Continually optimize backward manufactured products whereas communities negotiate life compelling alignments</p> --}}
                                <div class="th-social">
                                    <h6 class="title text-white">FOLLOW US ON:</h6>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.skype.com/"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="course.html">Life Coach</a></li>
                                    <li><a href="course.html">Business Coach</a></li>
                                    <li><a href="course.html">Health Coach</a></li>
                                    <li><a href="course.html">Development</a></li>
                                    <li><a href="course.html">Web Design</a></li>
                                    <li><a href="course.html">SEO Optimize</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Courses</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="course-details.html">Health Course</a></li>
                                    <li><a href="course-details.html">Web Development</a></li>
                                    <li><a href="course-details.html">UI/UX Design</a></li>
                                    <li><a href="course-details.html">Life Style Course</a></li>
                                    <li><a href="course-details.html">Digital Marketing</a></li>
                                    <li><a href="course-details.html">Graphics Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Resources</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="contact.html">Community</a></li>
                                    <li><a href="contact.html">Support</a></li>
                                    <li><a href="contact.html">Video Guides</a></li>
                                    <li><a href="contact.html">Documentation</a></li>
                                    <li><a href="contact.html">Security</a></li>
                                    <li><a href="contact.html">Template</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3 col-xl-3">
                        <div class="widget widget_contact footer-widget">
                            <h3 class="widget_title">Get in touch!</h3>
                            <p class="contact-text">Fusce varius, dolor tempor interdum tristiquei bibendum service life.</p>
                            <div class="th-widget-contact">
                                <div class="info-box-wrap">
                                    <div class="info-box_icon">
                                        <i class="fas fa-location-dot"></i>
                                    </div>
                                    <p class="info-box_text">
                                        147/I, Green Road, Gulshan Avenue, Panthapath, Dhaka
                                    </p>
                                </div>
                                <div class="info-box-wrap">
                                    <div class="info-box_icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <a href="mailto:info@Edura.com" class="info-box_link">info@edura.com</a>
                                </div>
                                <div class="info-box-wrap">
                                    <div class="info-box_icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <a href="tel:+11234567890" class="info-box_link">+256 214 203 215</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright © 2023 {{ env('APP_NAME') }}  All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-md-block">
                        
                        <div class="footer-links">
                            <ul>
                                <li class="text-white">Design and Developed By MD. MUTASIM NAIB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('public/school/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('public/school/assets/js/slick.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('public/school/assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('public/school/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('public/school/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('public/school/assets/js/circle-progress.js')}}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('public/school/assets/js/jquery-ui.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('public/school/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('public/school/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Tilt JS -->
    <script src="{{ asset('public/school/assets/js/tilt.jquery.min.js')}}"></script>
    <!-- Tweenmax JS -->
    <script src="{{ asset('public/school/assets/js/tweenmax.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('public/school/assets/js/nice-select.min.js')}}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('public/school/assets/js/main.js')}}"></script>

</body>

</html>