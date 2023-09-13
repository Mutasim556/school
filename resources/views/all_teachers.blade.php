@extends('layouts.school')
@section('title')
শিক্ষক শিক্ষিকা
@endsection
@section('content')
<div class="team-area overflow-hidden py-30">
    <div class="container">
        <div class="row align-items-center gy-4">
            <!-- Single Item -->
            @foreach ($teachers as $teacher)
                
            
            <div class="col-sm-6 col-lg-3 col-xl-3">
                <div class="team-card style3">
                    <div class="team-img-wrap">
                        <div class="team-img">
                            <img src="{{ asset($teacher->teacher_image) }}" style="height: 100%" alt="Team">
                        </div>
                    </div>
                    <div class="team-hover-wrap">
                        
                        <div class="team-content text-center">
                            <h4 class="team-title mb-3"><a href="team-details.html" style="font-size: 20px">{{ $teacher->teacher_name }}</a></h4>
                            <span class="team-desig">{{ $teacher->teacher_designation }} {{ $teacher->teacher_designation=='প্রধান শিক্ষক'?'':'( '.$teacher->teacher_subject.' ) ' }}</span>
                            <span class="team-desig mt-2"><i class="fa-solid fa-phone"></i> {{ $teacher->teacher_phone }}</span>
                            <span class="team-desig mt-2"><i class="fa-solid fa-envelope"></i> {{ $teacher->teacher_email }}</span>
                        </div>
                        <div class="team-info">
                            <a href="{{ url('teacher-profile',$teacher->teacher_id) }}" class="th-btn style1 form-control">প্রোফাইল </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
@endsection