@extends('layouts.admin')
@section('title')
    Address & Contact
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
          <h3>Address & Contact</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">School Section</li>
            <li class="breadcrumb-item">Address & Contact</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
        
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="div-header mt-3">
                    <h4 class="card-title text-center">Address & Contact {{ env('APP_NAME') }} </h4>
                    <h4 class="card-title text-right mr-3"></h4>
                </div>
                <div class="card-body">
                    <form class="theme-form" id="address_school_form" method="POST">
                        @csrf
                        <div class="row">
                            
                            <div class="from-group col-md-12 mt-3">
                                <label for="school_address">School Address</label>
                                <textarea class="form-control" name="school_address" id="" cols="30" rows="7">{{ $address->school_address }}</textarea>
                            </div>
                            <div class="from-group col-md-6 mt-3">
                                <label for="school_phone">School Phone</label>
                                <input type="text" class="form-control" name="school_phone" value="{{ $address->school_phone }}">
                            </div>
                            <div class="from-group col-md-6 mt-3">
                                <label for="school_email">School Email</label>
                                <input type="text" class="form-control" name="school_email" value="{{ $address->school_email }}">
                            </div>
                            <div class="from-group col-md-12 mt-3">
                                <label for="school_location_link">School Location Link</label>
                                <textarea class="form-control" name="school_location_link" id="" cols="30" rows="5">{{ $address->school_location_link }}</textarea>
                            </div>
                            <div class="from-group col-md-12 mt-3">
                                <label for="school_facebook_link">School Facebook Link</label>
                                <input type="text" class="form-control" name="school_facebook_link" value="{{ $address->school_facebook_link }}">
                            </div>
                            <div class="from-group col-md-12 mt-3">
                                <label for="school_linkedin_link">School Linked In Link</label>
                                <input type="text" class="form-control" name="school_linkedin_link" value="{{ $address->school_linkedin_link }}">
                            </div>
                            <div class="from-group col-md-12 mt-3">
                                <label for="school_youtube_link">School Youtube Link</label>
                                <input type="text" class="form-control" name="school_youtube_link" value="{{ $address->school_youtube_link }}">
                            </div>
                            <div class="from-group col-md-12 mt-3">
                                <button class="btn btn-success btn-square" style="float: right" id="address_school_button" type="submit" >UPDATE INFORMATION</button>
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