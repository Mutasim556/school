@extends('layouts.school')
@section('title')
ছবির গ্যালারী
@endsection
@section('content')
<div class="space pb-0 pt-5">
    <div class="container">
        <div class="row gy-4 masonary-active">
            @foreach ($galleries as $gallery)
                
            <div class="col-md-6 col-xxl-3 col-xl-3 filter-item">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{ asset($gallery->gallery_image)}}" style="height: 250px" alt="gallery image">
                        <a href="{{ asset($gallery->gallery_image)}}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a>
                    </div>
                    <div class="gallery-content">
                        <span class="gallery-tag">{{ $gallery->gallery_title }}</span>
                        {{-- <h2 class="gallery-title">Digital Marketing</h2> --}}
                    </div>
                </div>
            </div>
            
            @endforeach
            
            
        
        </div>
        
    </div>
    <div class="container pt-30 ">
        <div class="row">
            <div class="col-md-6 col-xl-6" style="float: right">
                {{ $galleries->links() }}
            </div>
        </div>
        
    </div>
</div>
@endsection