@extends('layouts.school')
@section('title')
পরিচিতি
@endsection
@section('content')
@php
    $school_contents = DB::table('school_contents')->first();
    $about_school = DB::table('about_schools')->first();
    $address = DB::table('addresses')->first();
@endphp
<section class="space-top space-extra-bottom py-5">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                <div class="event-details-wrap">
                    <div class="event-img text-center" style="height: 400px"> 
                        <img src="{{ asset('public/school/mgmlhs.png') }}" alt="Event Image">
                    </div>
                    <h3 class="h3 mt-n2">{{ $school_contents->school_name }}</h3>
                    {!! $about_school->about_school !!}
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_info  ">
                        
                        <div class="info-list">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    <strong>স্থাপিত : </strong>
                                    <span> ১৯৩৬ ইং</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <strong>EIIN : </strong>
                                    <span>{{ $school_contents->school_eiin }}</span>
                                </li>
                                {{-- <li>
                                    <i class="fa-light fa-location-dot"></i>
                                    <strong>Venue: </strong>
                                    <span>Sunny Party Center</span>
                                </li>
                                <li>
                                    <i class="fa-light fa-map"></i>
                                    <strong> Address: </strong>
                                    <span>256 SDY Oliva St.</span>
                                </li>
                                <li>
                                    <i class="fa-light fa-user"></i>
                                    <strong>Name: </strong>
                                    <span>David Smith</span>
                                </li> --}}
                                <li>
                                    <i class="fa-light fa-phone"></i>
                                    <strong>মোবাইল : </strong>
                                    <span>{{ $address->school_phone }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget_banner p-0  ">
                        <div class="widget-map">
                            {!! $address->school_location_link !!}
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection