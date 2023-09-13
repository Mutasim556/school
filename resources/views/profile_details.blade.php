@extends('layouts.school')
@section('title')
 শিক্ষক / শিক্ষিকা প্রোফাইল
@endsection
@section('content')
    <div class="container py-30">
        <div class="team-details-about-info">
            <div class="row gx-40">
                <div class="col-lg-3 position-relative mx-auto">
                    <div class="team-details-thumb text-center">
                        <img src="{{ asset($teacher->teacher_image) }}" alt="team image">
                    </div>
                </div>
                <div class="col-lg-7 mx-auto">
                    <div class="about-box">
                        <div class="about-info">
                            <h2 class="title">{{ $teacher->teacher_name }}</h2>
                            <p class="desig">{{ $teacher->teacher_designation }} {{ $teacher->teacher_designation=='প্রধান শিক্ষক'?'':'( '.$teacher->teacher_subject.' ) ' }}</p>
                        </div>
                    </div>
                    <div class="about-quality mt-0">
                        <div class="quality-box col-lg-4 px-2">
                            <span class="quality-text">পিডিএস আইডি : {{ $teacher->teacher_pdsid }}</span>
                            <span class="quality-text">যোগদানের তারিখ : {{ $teacher->teacher_joining_date }}</span>
                        </div>
                        <div class="quality-box col-lg-4 px-2">
                            <span class="quality-text">ঠিকানা : {{ $teacher->division.' , '.$teacher->district.' , '.$teacher->upazila }} {{ $teacher->teacher_address }}</span>
                        </div>
                        <div class="quality-box col-lg-4 px-2">
                            <span class="quality-text">জন্ম তারিখ : {{ $teacher->teacher_dob }}</span>
                            <span class="quality-text">ডিগ্রী : {{ $teacher->teacher_degree }}</span>
                        </div>
                    </div>
                    <div class="about-contact-wrap">
                        <div class="about-contact">
                            <div class="about-contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="about-contact-details">
                                <h6 class="about-contact-title">{{ $teacher->teacher_phone }}</h6>
                            </div>
                        </div>
                        <div class="about-contact">
                            <div class="about-contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="about-contact-details">
                                <h6 class="about-contact-title">{{ $teacher->teacher_email }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection