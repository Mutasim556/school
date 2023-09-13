@extends('layouts.admin')
@section('title')
    Introduction
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/admin/croppie/croppie.css')}}" />
<link href="{{ asset('public/admin/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/summernote.css')}}">
@endsection
@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Introduction</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">School Section</li>
            <li class="breadcrumb-item">Introduction</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
        
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <div class="div-header mt-3">
                    <h4 class="card-title text-center">About {{ env('APP_NAME') }} </h4>
                    <h4 class="card-title text-right mr-3"></h4>
                </div>
                <div class="card-body">
                    <form class="theme-form" id="about_school_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="from-group col-md-12 mt-2">
                                <label for="" class="labelcolor"><strong></strong></label>
                                <input type="hidden" value="{{ $about->about_school_id }}" name="about_school_id"> 
                                <textarea rows="8" name="about_school" class="form-control summernote" value="">{{ $about->about_school }}</textarea>
                            </div>
                           
                            <div class="from-group col-md-12 mt-3">
                                <button class="btn btn-success btn-square" style="float: right" id="about_school_button" type="submit" >UPDATE INFORMATION</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>
  </div>
@endsection
@section('js')
<script src="{{ asset('public/admin/assets/js/sweet-alert/sweetalert2.js')}}"></script>
<script src="{{ asset('public/admin/switchery/switchery.min.js')}}"></script>
<script src="{{ asset('public/admin/croppie/croppie.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.ui.min.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/editor/summernote/summernote.custom.js')}}"></script>
<script src="{{ asset('public/admin/custom/others.js')}}"></script>
@endsection