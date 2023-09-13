@extends('layouts.admin')
@section('title')
    Main Slider
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/admin/croppie/croppie.css')}}" />
<link href="{{ asset('public/admin/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Main Slider</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">School Section</li>
            <li class="breadcrumb-item">Main Slider</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="div-header mt-3">
                    <h4 class="card-title text-center">{{ env('APP_NAME') }} Main Slider</h4>
                    <h4 class="card-title text-right mr-3"></h4>
                </div>
                <div class="card-body">
                    <form class="theme-form" id="insert_slider_image_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="from-group col-md-12 mt-3">
                                <label for="main_slider_title">Title</label>
                                <input type="text" class="form-control" name="main_slider_title">
                            </div>
                            <div class="from-group col-md-12 mt-3">
                                <label for="main_slider_image">Image</label>
                                <input type="file" class="form-control" name="main_slider_image">
                            </div>
                            <div class="from-group col-md-12 mt-3">
                                <button class="btn btn-success btn-square" style="float: right" id="insert_slider_image_buuton" type="submit" >INSERT SLIDER IMAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="div-header mt-3">
                    <h4 class="card-title text-center">View {{ env('APP_NAME') }} Main Slider</h4>
                    <h4 class="card-title text-right mr-3"></h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr class="border-bottom-primary">
                            <th scope="col">Id</th>
                            <th scope="col">Slider Title</th>
                            <th scope="col">Slider Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr class="border-bottom-dark">
                                    <td>{{ $slider->main_slider_id }}</td>
                                    <td>{{ $slider->main_slider_title }}</td>
                                    <td> <img src="{{ asset($slider->main_slider_image) }}" alt="slider" style="height: 100px;"></td>
                                    <td><button type="button" id="delete_button" data-delete="{{ $slider->main_slider_id }}" class="btn btn-danger btn-square py-1 px-2"><i class="fa fa-trash"></i></button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<script src="{{ asset('public/admin/custom/main_slider.js')}}"></script>
@endsection