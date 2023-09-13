@extends('layouts.school')
@section('title')
হোম
@endsection
@section('content')
<div class="row">
        
    <div  class="col-lg-7 col-md-6 col-sm-12">
        <div class="th-hero-wrapper hero-3" id="hero">
            <div class="hero-slider-2 th-carousel custom-padding" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true">
    
                @php
                    $sliders = DB::table('main_sliders')->where('main_slider_delete',0)->orderBy('main_slider_id','DESC')->limit(3)->get();
                @endphp
                @foreach ($sliders as $slider)
                    
                
                <div class="th-hero-slide" style="height:550px">
                    <div class="th-hero-bg" data-bg-src="{{ asset($slider->main_slider_image)}}"></div>
                    <div class="th-hero-bg-overlay" data-bg-color="black" style="opacity: .5"></div>
                    <div class="container" style="padding-top: 0px;">
                        <div class="row align-items-center justify-content-center" style="padding-top: 250px;">
                            <div class="col-lg-12">
                                <div class="hero-style3 text-center"  style="padding-top: 0px;">
                                    <span class="hero-subtitle text-white" data-ani="slideinup" data-ani-delay="0.1s">{{ $slider->main_slider_title }}</span>
                                    
                                    <div class="btn-group justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="{{ url('contact-us') }}" class="th-btn style3">যোগাযোগ<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
    
    
                
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
                @php
                    $notices = DB::table('notices')->where('notice_delete',0)->where('notice_status',"Active")->orderBy('notice_id','DESC')->limit(5)->get();
                @endphp
                @foreach ($notices as $notice)
                <li><i style="font-size: 22px" class="fa-solid fa-file-pdf text-theme me-2"></i><a href="{{ $notice->notice_file }}" target="__blank">{{ $notice->notice_title }}</a></li>
                @endforeach

            </ul>
            <a href="{{ url('school-notice') }}" class="th-btn py-2 px-2 mt-4 mb-4" style="float: right;">সবগুলো দেখুন</a>
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
                <marquee behavior="" direction="" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();"> <span style="color: white;font-size:22px;font-weight:700;line-height:40px">{{ $notice->notice_title }} **** </span> </marquee>
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
                        @php
                            $about = \App\Models\AboutSchool::first();
                        @endphp
                        {{-- { Str::limit({!! $about->about_school !!}, 550,'.....') } --}}
                        {!! Str::words($about->about_school,120,'....') !!}
                        {{-- {!! $about->about_school !!} --}}
                    </p>
                    <div class="btn-group mt-15">
                        <a href="{{ url('about-school') }}" class="th-btn">আরও পড়ুন<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <a href="{{ url('contact-us')}}" class="th-btn style7">যোগাযোগ <i class="fa-regular fa-arrow-right ms-2"></i></a>
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
                <p class="mt-n2 mb-10">
                        @php
                            $headmaster = \App\Models\HeadmasterSpeech::first();
                        @endphp
                        
                        {{-- {!! $headmaster->headmaster_speech !!} --}}
                        {{-- {!! Str::limit($headmaster->headmaster_speech, 550) !!} --}}
                        {!! Str::words($headmaster->headmaster_speech,120,'....') !!}
                </p>
                
                
                <a href="about.html" class="th-btn mt-40 mb-30">আরও পড়ুন<i class="fa-regular fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-xl-5 mb-0 mb-xl-0">
                <div class="img-box4" style="text-align:center"> 
                    <div class="img1 m-0" style="text-align:center">
                        <img class="tilt-active mx-auto" src="{{ asset($headmaster->headmaster_image) }}" style="" alt="About">
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
                    <a href="gallery" class="th-btn">সবগুলো দেখুন<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            @php
                $galleries = DB::table('galleries')->limit(10)->get();
            @endphp
            @foreach ($galleries as $gallery)
            <div class="col-md-6 col-xl-4">
                <div class="th-blog blog-single style2">
                    <div class="blog-img" >
                        <a href="#"><img src="{{ asset($gallery->gallery_image)}}"  alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="#"><i class="fa-light fa-user"></i>by MGMLHS</a>
                            <a href="#" class="float-right"><i class="fa-light fa-clock"></i> {{ \Carbon\Carbon::parse($gallery->created_at)->format('d F , Y'); }}</a>
                        </div>
                        <a href="#" class="text-dark">{{ $gallery->gallery_title}}</a>
                        
                        {{-- <br><a href="blog-details.html" class="link-btn">আরও পড়ুন <i class="fas fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</section>
<div class="container">
    <div class="counter-area-1 bg-theme" data-bg-src="{{ asset('public/school/assets/img/bg/counter-bg_1.png') }}">
        <div class="row justify-content-between py-0">
            <div class="col-sm-6 col-xl-3 counter-card-wrap" style="border:0px">
                <div class="counter-card py-40">
                    <h2 class="counter-card_number"><span class="counter-number">15</span><span class="fw-normal"></span></h2>
                    <p class="counter-card_text"><strong>অভিজ্ঞ শিক্ষক </strong></p>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap" style="border:0px">
                <div class="counter-card py-40">
                    <h2 class="counter-card_number"><span class="counter-number">2</span><span class="fw-normal">+</span></h2>
                    <p class="counter-card_text"><strong>অন্যান্য কর্মচারী</strong> </p>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap" style="border:0px">
                <div class="counter-card py-40">
                    <h2 class="counter-card_number"><span class="counter-number">2</span><span class="fw-normal"></span></h2>
                    <p class="counter-card_text"><strong>ভবন</strong> </p>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap" style="border:0px">
                <div class="counter-card py-40">
                    <h2 class="counter-card_number"><span class="counter-number">1000</span><span class="fw-normal">+</span></h2>
                    <p class="counter-card_text"><strong>অধ্যয়নরত শিক্ষার্থী</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection