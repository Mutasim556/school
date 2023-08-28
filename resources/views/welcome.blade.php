@extends('layouts.school')

@section('content')
<div class="row">
        
    <div  class="col-lg-7 col-md-6 col-sm-12">
        <div class="th-hero-wrapper hero-3" id="hero">
            <div class="hero-slider-2 th-carousel custom-padding" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true">
    
    
                <div class="th-hero-slide" style="height:550px">
                    <div class="th-hero-bg" data-bg-src="{{ asset('public/school/upload/home_slide/1.jpg')}}"></div>
                    <div class="th-hero-bg-overlay" data-bg-color="black" style="opacity: .5"></div>
                    <div class="container" style="padding-top: 0px;">
                        <div class="row align-items-center justify-content-center" style="padding-top: 250px;">
                            <div class="col-lg-12">
                                <div class="hero-style3 text-center"  style="padding-top: 0px;">
                                    <span class="hero-subtitle text-white" data-ani="slideinup" data-ani-delay="0.1s">মিরজাগঞ্জ বহুমুখী উচ্চ বিদ্যালয়</span>
                                    
                                    <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="contact.html" class="th-btn style3">যোগাযোগ<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="th-hero-slide" style="height:550px">
                    <div class="th-hero-bg" data-bg-src="{{ asset('public/school/upload/home_slide/2.jpg')}}"></div>
                    <div class="th-hero-bg-overlay" data-bg-color="black" style="opacity: .5"></div>
                    <div class="container" style="padding-top: 0px;">
                        <div class="row align-items-center justify-content-center" style="padding-top: 250px;">
                            <div class="col-lg-12">
                                <div class="hero-style3 text-center"  style="padding-top: 0px;">
                                    <span class="hero-subtitle text-white" data-ani="slideinup" data-ani-delay="0.1s">মিরজাগঞ্জ বহুমুখী উচ্চ বিদ্যালয়</span>
                                    
                                    <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="contact.html" class="th-btn style3">যোগাযোগ<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="th-hero-slide" style="height:550px">
                    <div class="th-hero-bg" data-bg-src="{{ asset('public/school/upload/home_slide/3.jpg')}}"></div>
                    <div class="th-hero-bg-overlay" data-bg-color="black" style="opacity: .5"></div>
                    <div class="container" style="padding-top: 0px;">
                        <div class="row align-items-center justify-content-center" style="padding-top: 250px;">
                            <div class="col-lg-12">
                                <div class="hero-style3 text-center"  style="padding-top: 0px;">
                                    <span class="hero-subtitle text-white" data-ani="slideinup" data-ani-delay="0.1s">মিরজাগঞ্জ বহুমুখী উচ্চ বিদ্যালয়</span>
                                    
                                    <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="contact.html" class="th-btn style3">যোগাযোগ<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                
            </div>
            {{-- <div class="hero-shape shape1 movingX d-md-block d-none">
                <img src="{{ asset('public/school/assets/img/hero/shape_3_1.png')}}" alt="shape">
            </div>
            <div class="hero-shape shape2 d-sm-block d-none">
                <img class="spin" src="{{ asset('public/school/assets/img/hero/shape_3_2.png')}}" alt="shape">
            </div>
            <div class="hero-shape shape3 spin d-sm-block d-none">
                <img src="{{ asset('public/school/assets/img/hero/shape_2_4.png')}}" alt="shape">
            </div> --}}
        </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-12">
        <div class="checklist style5 mt-30 p-4 pt-1">
            <h3>নোটিশ বোর্ড</h3>
            <ul class="mt-4">
                <li><i style="font-size: 22px" class="fa-solid fa-file-pdf text-theme me-2"></i> B.S. State University of New York, United States of America, M.A.C. Ph.D. Urbana-Champaign</li>
                <li><i style="font-size: 22px" class="fa-solid fa-file-pdf text-theme me-2"></i> B.S. State University of New York, United States of America, M.A.C. Ph.D. Urbana-Champaign</li>
                <li><i style="font-size: 22px" class="fa-solid fa-file-pdf text-theme me-2"></i> B.S. State University of New York, United States of America, M.A.C. Ph.D. Urbana-Champaign</li>
                <li><i style="font-size: 22px" class="fa-solid fa-file-pdf text-theme me-2"></i> B.S. State University of New York, United States of America, M.A.C. Ph.D. Urbana-Champaign</li>
                <li><i style="font-size: 22px" class="fa-solid fa-file-pdf text-theme me-2"></i> B.S. State University of New York, United States of America, M.A.C. Ph.D. Urbana-Champaign</li>
                <li><i style="font-size: 22px" class="fa-solid fa-file-pdf text-theme me-2"></i> B.S. State University of New York, United States of America, M.A.C. Ph.D. Urbana-Champaign</li>

            </ul>
            <a href="" class="th-btn py-2 px-2 mt-4 mb-4" style="float: right;">View All</a>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
Contact Area  
==============================-->
<div class="bg-theme client-area-3 mt-4 py-1">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-11 col-md-11 col-sm-12 mx-auto">
                <marquee behavior="" direction="" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();"> <span style="color: white;font-size:22px;font-weight:700;line-height:40px">উপস্থিতি-প্রসঙ্গে *** 2023-24 শিক্ষাবর্ষে একাদশ শ্রেণিতে SQ কোটায় আবেদনকারী শিক্ষার্থীদের প্রয়োজনীয় নথিপত্র জমাদান প্রসংগে *** 2023-24 শিক্ষাবর্ষে একাদশ</span> </marquee>
            </div>

            

        </div>
    </div>
</div>
<!--==============================

About Area  
==============================-->
<div class="overflow-hidden " data-bg-src="{{ asset('public/school/assets/img/bg/about-3-bg.png') }}" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="img-box3">
                    <img class="img-1 tilt-active" src="{{ asset('public/school/mgmlhs.png') }}" style="height: 100%" alt="About">
                </div>
            </div>

            <div class="col-xl-6">
                <div class="space">
                    <div class="title-area mb-35">
                        <h2 class="sec-title">বিদ্যালয় সম্পর্কে কিছু কথা</h2>
                    </div>
                    <p class="mt-n2 mb-30">
                        ‌মোহনপুর সরকা‌রি উচ্চ বিদ‌্যালয়‌টি ২ জানুয়ারী ১৯৪৮ সালে  স্থা‌পিত হয়ে ১ জানুয়ারী ১৯৫২ সালে প্রথম স্বীকৃ‌তি পায়। পরবর্তীতে ১ জুলাই ১৯৮৭ সালে জাতীয়করণ করা হয়। জা‌তির পিতা বঙ্গবন্ধু শেখ মু‌জিবুর রহমানের আদর্শে অনুপ্রা‌নিত শ্রী যুক্ত বাবু রাখাল চন্দ্র দাশ বিদ‌্যালয়‌টির প্র‌তিষ্ঠাতা প্রধান শিক্ষক। তি‌নি জা‌তীয় শ্রেষ্ঠ শিক্ষকের মর্যাদা পেয়ে‌ছিলেন। তাঁর হাতে গড়া ‌অনেক শিক্ষার্থী দেশে বা বিদেশে ছোট বা বড় অনেক পদে থেকে সুনামের সাথে দা‌য়িত্ব পালন করেছেন বা করছেন। বর্তমান প্রধান শিক্ষকের পরামর্শ ‌ভি‌ত্তিক বিদ‌্যালয়টি প‌রিচালনায় একাডেমিক ফলাফল উত্তর উত্তর বৃ‌দ্ধি পাচ্ছে। তি‌নি বিদ‌্যালয়‌টির সফলতা কামনা করেন। জাতীয়কর‌ণের পর থে‌কে অদ‌্যাব‌ধি দা‌য়িত্ব পালনকা‌রি প্রধান‌দের না‌মের তা‌লিকা, সর্বজনাব (১)শ্রী যুক্ত বাবু রাখাল চন্দ্র দাশ (ভারপ্রাপ্ত) ০১-০৭-১৯৮৭ হ‌তে ৩০-০৩-১৯৮৯ (২) মি.রিয়াজ উ‌দ্দিন আহ‌মেদ (ভারপ্রাপ্ত) ৩০-০৩-১৯৮৯ হ‌তে ০১-০৫-১৯৮৯ (৩) মি‌সেস রওশন জাহান ০১-০৫-১৯৮৯ হ‌তে ১৩-০৪-১৯৯২ (৪) মো: ইসমাইল (ভারপ্রাপ্ত) ১৩-০৪-১৯৯২ হ‌তে ১০-০৫-১৯৯২ (৫) ........
                    </p>
                    <div class="btn-group mt-15">
                        <a href="about.html" class="th-btn">আরও পড়ুন<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <a href="about.html" class="th-btn style7">যোগাযোগ <i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="overflow-hidden overflow-hidden bg-smoke space" id="about-sec" data-bg-src="{{ asset('public/school/assets/img/bg/about-5-bg.png')}}">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-5">
                <div class="title-area mb-35">
                    <h2 class="sec-title">প্রধান শিক্ষকের বাণী</h2>
                </div>
                <p class="mt-n2 mb-10">শিক্ষাই জাতির মেরুদন্ড। কাজেই সবার জন্য শিক্ষা অর্জন করা মানুষের মৌলিক অধিকার। এ অধিকারকে যথাযথভাবে বাস্তবায়নের মাধ্যমে বিশ্বের অনেক দেশ আজ উন্নত দেশ হিসেবে উন্নতির চরম শিখরে আরোহণ করেছে। এ ক্ষেত্রে বাংলাদেশ তার কাঙ্ক্ষিত লক্ষ্য অর্জনে সাধ্যমত চেষ্টা চালিয়ে যাচ্ছে। যুগের সাথে সংগতিপূর্ণ বিকাশের জন্য আমরা প্রত্যেকেই ভাবি নিজ নিজ সন্তানদের নিয়ে। প্রকৃতির সন্তান মানব শিশুকে পরিশুদ্ধ হতে হয়, পরিপুর্ণ হতে হয় স্বীয় সাধনায়। এ ক্ষেত্রে শিক্ষায় হলো আমাদের মূলমন্ত্র। আমরা দৃঢ়ভাবে বিশ্বাস করি শিক্ষার মৌলিক উদ্দেশ্য হলো আচরণের কাঙ্ক্ষিত পরিবর্তন ...</p>
                
                
                <a href="about.html" class="th-btn mt-40 mb-30">আরও পড়ুন<i class="fa-regular fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-xl-5 mb-0 mb-xl-0">
                <div class="img-box4" style="text-align:center"> 
                    <div class="img1 m-0" style="text-align:center">
                        <img class="tilt-active mx-auto" src="{{ asset('public/school/asm.png') }}" style="" alt="About">
                    </div>
                    <p class="mt-n2 mb-10 " style="font-size: 18px;text-align:center;margin-top:20px;">
                        <strong>এ এস এম আব্দুল কাদের</strong> <br>
                        প্রধান শিক্ষক <br>
                        মিরজাগঞ্জ বহুমুখী উচ্চ বিদ্যালয়,মিরজাগঞ্জ
                    </p>
                </div>
                {{-- <div class="title-area mb-35 mt-25">
                    <p class="mt-n2 mb-10" style="font-size: 18px;text-align:center">
                        <strong>এ এস এম আব্দুল কাদের</strong> <br>
                        প্রধান শিক্ষক <br>
                        মিরজাগঞ্জ বহুমুখী উচ্চ বিদ্যালয়,মিরজাগঞ্জ
                    </p>
                </div> --}}
            </div>
            <div class="col-xl-2" id="important_links">
                <div class="title-area mb-35">
                    <p class="sec-title text-center"><strong>গুরুত্বপূর্ণ লিংক</strong></p>
                    <ul class="text-dark">
                        <li><a href="https://dinajpureducationboard.gov.bd/">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, দিনাজপুর</a></li>
                        <li class="mt-2"><a href="https://dinajpureducationboard.gov.bd/">মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ-শিক্ষা মন্ত্রণালয়
                        </a></li>
                        <li class="mt-2"><a href="https://dinajpureducationboard.gov.bd/">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a></li>
                    </ul>
                </div>
                <p class="mt-n2 mb-10">

                </p>
            </div>
        </div>
    </div>
</div>
<!--==============================
Contact Area  
==============================-->
<section class="overflow-hidden space" id="blog-sec" style="background-image: url({{ asset('public/school/assets/img/bg/blog-3-bg.png') }});">
    <div class="container">
        <div class="mb-35 text-center text-md-start">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8">
                    <div class="title-area mb-md-0">
                        <span class="sub-title"><i class="fal fa-book me-2"></i>মিরজাগঞ্জ বহুমুখী উচ্চ বিদ্যালয়ের</span>
                        <h2 class="sec-title">সর্বশেষ কিছু ছবি</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <a href="blog.html" class="th-btn">View All Posts<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            <div class="col-md-6 col-xl-4">
                <div class="th-blog blog-single style2">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{ asset('public/school/upload/home_slide/1.jpg')}}"  alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="fa-light fa-clock"></i>05 Jun, 2023</a>
                        </div>
                        <a href="blog-details.html" class="text-dark">বিদ্যালয়ের প্রধান ফটক</a>
                        
                        <br><a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="th-blog blog-single style2">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{ asset('public/school/upload/home_slide/2.jpg')}}" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="fa-light fa-clock"></i>03 Jun, 2023</a>
                        </div>
                       <a href="blog-details.html" class="text-dark">বিদ্যালয়ের একাডেমিক ভবন </a>
                        
                        <br><a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="th-blog blog-single style2">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{ asset('public/school/upload/home_slide/3.jpg')}}"  alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="fa-light fa-clock"></i>10 Jul, 2023</a>
                        </div>
                        <a href="blog-details.html" class="text-dark">বিদ্যালয়ের একাডেমিক ভবন</a>
                        
                        <br><a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-6 col-xl-4">
                <div class="th-blog blog-single style2">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{ asset('public/school/upload/home_slide/1.jpg')}}"  alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="fa-light fa-clock"></i>10 Jul, 2023</a>
                        </div>
                        <a href="blog-details.html" class="text-dark">বিদ্যালয়ের একাডেমিক ভবন</a>
                        
                        <br><a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    
@endsection