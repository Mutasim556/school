@extends('layouts.school')
@section('title')
যোগাযোগ
@endsection
@section('content')
<div class="space pt-3" id="contact-sec">
    <div class="container">
        <div class="map-sec">
            <div class="map">
                @php
                    $address = DB::table('addresses')->first();
                @endphp
                {!! $address->school_location_link !!}
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 mb-30 mb-xl-0">
                <div class="me-xxl-5">
                    {{-- <div class="title-area mb-25  mt-30">
                        <h2 class="border-title h3">Have Any Questions?</h2>
                    </div>
                    <p class="mt-n2 mb-25">Have a inquiry or some feedback for us? Fill out the form <br> below to contact our team.</p> --}}
                    <div class="contact-feature mt-30">
                        <div class="contact-feature-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <p class="contact-feature_label">ঠিকানা</p>
                            <a href="https://www.google.com/maps" class="contact-feature_link">{{ $address->school_address }}</a>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="contact-feature-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <p class="contact-feature_label">মোবাইল নাম্বার</p>
                            <a href="tel:+011456586986" class="contact-feature_link">মোবাইল : <span>{{ $address->school_phone }}</span></a>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="contact-feature-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <p class="contact-feature_label">ইমেইল</p>
                            <a href="tel:+011456586986" class="contact-feature_link">ইমেইল : <span>{{ $address->school_email }}</span></a>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="contact-feature-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="media-body ">
                            <p class="contact-feature_label">যোগাযোগের সময়</p>
                            <span class="contact-feature_link">রবিবার থেকে বৃহস্পতিবার<br> সকাল ১০ : ০০ - বিকাল ০৫ : ০০ <br> সরকারী বন্ধের দিন বাদে</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-form-wrap" data-bg-src="{{ asset('public/school/assets/img/bg/contact_bg_1.png') }}">
                    <span class="sub-title">Contact With Us!</span>
                    <h2 class="border-title">Get in Touch</h2>
                    <p class="mt-n1 mb-30 sec-text">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <form action="mail.php" method="POST" class="contact-form ajax-contact">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="name" id="name" placeholder="Your Name*">
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control style-white" name="email" id="email" placeholder="Email Address*">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="subject" id="subject" class="single-select nice-select form-select style-white">
                                        <option value="" disabled selected hidden>Select Subject*</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Engine Diagnostics">Engine Diagnostics</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control style-white" name="number" id="number" placeholder="Phone Number*">
                                    <i class="fal fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group ">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="Write Your Message*"></textarea>
                                    <i class="fal fa-pen"></i>
                                </div>
                            </div>
                            <div class="form-btn col-12 mt-10">
                                <button class="th-btn">Send Message<i class="fas fa-long-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection