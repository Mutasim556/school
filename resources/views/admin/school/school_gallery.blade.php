@extends('layouts.admin')
@section('title')
    Gallery
@endsection
@section('css')

<script src="{{ asset('public/admin/assets/js/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/photoswipe/photoswipe.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/admin/croppie/croppie.css')}}" />
<link href="{{ asset('public/admin/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/summernote.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/photoswipe.css')}}">
<style>
.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
    z-index: 3;
    color: #ffffff;
    background-color: purple;
    border-color: #ddd;
}
</style>
@endsection
@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Gallery</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">School Section</li>
            <li class="breadcrumb-item">Gallery</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
        
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="div-header mt-3">
                    <h4 class="card-title text-center">Gallery {{ env('APP_NAME') }} </h4>
                    <h4 class="card-title text-right mr-3"></h4>
                </div>
                <div class="card-body">
                    <form class="theme-form" id="school_gallery_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="from-group col-md-12 mt-2">
                                <label for="" class="labelcolor"><strong>Image</strong></label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="from-group col-md-12 mt-2">
                                <label for="" class="labelcolor"><strong>Image Title</strong></label>
                                <input type="text" class="form-control" name="image_title">
                            </div>

                            <div class="from-group col-md-12 mt-2">
                                <label for="" class="labelcolor"><strong>Image Details</strong></label>
                                <textarea class="form-control" name="image_details" rows="5"></textarea>
                            </div>
                           
                            <div class="from-group col-md-12 mt-3">
                                <button class="btn btn-success btn-square" style="float: right" id="school_gallery_button" type="submit" >Upload Informations</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <h4>Gallery Images <span></span></h4>
            </div>
            <div class="card-body">
              <div class="row my-gallery gallery-with-description pb-3" id="aniimated-thumbnials" itemscope="">
                    @foreach ($galleries as $gallery)
                        
                    
                    <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a  href="{{ asset($gallery->gallery_image)}}" itemprop="contentUrl" data-size="1600x950">
                        <div><img src="{{ asset($gallery->gallery_image)}}"  itemprop="thumbnail" alt="Image description"></div>
                        <div class="caption mt-2 py-3">
                            <h4 class="text-dark">{{ $gallery->gallery_title }}</h4>
                            <p class="mb-0 text-dark">{{ $gallery->gallery_details }}</p>
                        </div>
                        </a>
                        <a onclick="return confirm('Are you sure want to delete ?')" href="{{ url('school-gallery-delete',$gallery->gallery_id) }}" class="mb-3 btn btn-danger btn-square py-1 px-1 form-control mt-3"><i class="fa fa-trash"></i></a>
                    </figure>
                    

                    @endforeach
                
              </div>
              
              {{ $galleries->links() }}
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

<script src="{{ asset('public/admin/custom/gallery.js')}}"></script>
@if (Session::get('delete'))
    <script>
        var notify = $.notify('<i class="icofont icofont-checked"></i><strong>Deleted Successfully</strong> ', {
            type: 'dark',
            allow_dismiss: true,
            showProgressbar: true,
            // spacing:10,
            timer: 1000,
            placement:{
                from:'bottom',
                align:'right'
            },
            animate:{
                enter:'animated fadeInUp',
                exit:'animated fadeOutDown'
            },
            offset:{
                x:60,
                y:30
            },
            delay: 1000,
            z_index:10000,
        });

    </script>
@endif
@endsection