@extends('layouts.admin')
@section('title')
    All Teachers
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/datatable-extension.css') }}">
<link href="{{ asset('public/admin/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/sweetalert2.min.css')}}">
@endsection

@section('content')
<!-- Start add admin modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Teacher </h5>
          {{-- <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <i class="fa fa-close"></i>
          </button> --}}
          <button class="btn btn-sm btn-danger py-1 px-2" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" ></i></button>
          
        </div>
        <div class="modal-body">
            <form class="theme-form" action="" id="add_teacher_form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for="teacher_name"><strong>Teacher Name</strong></label>
                        <input type="text" class="form-control" name="teacher_name" >
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for=""><strong>Teacher PDS ID</strong></label>
                        <input type="text" class="form-control" name="teacher_pdsid" >
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for=""><strong>Teacher Gender</strong></label>
                        <select class="form-control" name="teacher_gender" style="border: 1px solid gray">
                            <option value="" selected disabled>Please Select</option>
                            <option value="পুরুষ">পুরুষ</option>
                            <option value="মহিলা">মহিলা</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for=""><strong>Teacher Designation</strong></label>
                        <select class="form-control" name="teacher_designation" style="border: 1px solid gray">
                            <option value="">Please Select</option>
                            {{-- <option value="প্রধান শিক্ষক">প্রধান শিক্ষক</option>
                            <option value="প্রধান শিক্ষক">সহকারী প্রধান শিক্ষক</option>
                            <option value="প্রধান শিক্ষক">সিনিয়র শিক্ষক</option>
                            <option value="প্রধান শিক্ষক">সহকারী শিক্ষক</option> --}}
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_email"><strong>Teacher Email</strong></label>
                        <input type="text" class="form-control" name="teacher_email" >
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_phone"><strong>Teacher Phone</strong></label>
                        <input type="text" class="form-control" name="teacher_phone" >
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_subject"><strong>Teacher Subject</strong></label>
                        <select class="form-control" name="teacher_subject" style="border: 1px solid gray">
                            <option value="">Please Select</option>
                            <option value="বাংলা">বাংলা</option>
                            <option value="ইংরেজি">ইংরেজি</option>
                            <option value="গণিত">গণিত</option>
                            <option value="সামাজিক বিজ্ঞান">সামাজিক বিজ্ঞান</option>
                            <option value="ইসলাম ধর্ম">ইসলাম ধর্ম</option>
                            <option value="হিন্দু ধর্ম">হিন্দু ধর্ম</option>
                            <option value="ইংরেজি">ইংরেজি</option>
                            <option value="ভৌত বিজ্ঞান">ভৌত বিজ্ঞান</option>
                            <option value="রসায়ন">রসায়ন</option>
                            <option value="জীব বিজ্ঞান">জীব বিজ্ঞান</option>
                            <option value="ব্যবসায় শিক্ষা">ব্যবসায় শিক্ষা</option>
                            <option value="কৃষি শিক্ষা">কৃষি শিক্ষা</option>
                            <option value="শারীরিক শিক্ষা">শারীরিক শিক্ষা</option>
                            <option value="চারুকলা">চারুকলা</option>
                            <option value="অন্যান্য">অন্যান্য</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_dob"><strong>Teacher DOB</strong></label>
                        <input type="date" class="form-control" name="teacher_dob" >
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_joining_date"><strong>Teacher Joining Date</strong></label>
                        <input type="date" class="form-control" name="teacher_joining_date" >
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_division"><strong>Teacher Division</strong></label>
                        <select class="form-control" name="teacher_division" id="teacher_division" style="border: 1px solid gray">
                            @php
                                $divisions = DB::table('divisions')->get();
                            @endphp
                              <option value="">Please Select</option>
                            @foreach ($divisions as $division)
                            <option value="{{ $division->id }}">{{ $division->bn_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_district"><strong>Teacher District</strong></label>
                        <select class="form-control" name="teacher_district" id="teacher_district" style="border: 1px solid gray"></select>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_upazila"><strong>Teacher Upazila</strong></label>
                        <select class="form-control" name="teacher_upazila" id="teacher_upazila" style="border: 1px solid gray"></select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_address"><strong>Teacher Address</strong></label>
                        <textarea class="form-control" name="teacher_address" style="border: 1px solid gray"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_degree"><strong>Teacher Degree</strong></label>
                        <textarea class="form-control" name="teacher_degree" style="border: 1px solid gray"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teache_image"><strong>Teacher Image</strong></label>
                        <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" class="form-control" name="teacher_image" accept="image/png,.jpg,.jpeg">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2 text-center">
                        <label for="teache_image"><strong>Preview Image</strong></label><br>
                        <img class="mx-auto" id="blah" width="100" height="100" />
                    </div>
                </div>
                <div class="modal-footer p-0 py-4">
                    <button type="button" class="btn btn-secondary btn-square mx-3" data-bs-dismiss="modal" id="modal_close">Close</button>
                    <button type="submit" class="btn btn-primary btn-square" id="teacher_insert_button" data-bs-backdrop="static" data-bs-keyboard="false">Add Teacher</button>
                </div>
            </form>

        </div>
      </div>
    </div>
</div>
{{-- End add admin modal --}}

<!-- Start edit admin modal -->
<div class="modal fade" id="exampleModalLongEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Teacher</h5>
          <button class="btn btn-sm btn-danger py-1 px-2" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" ></i></button>
        </div>
        <div class="modal-body">
            <form class="theme-form" action="" id="edit_teacher_form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for="teacher_name"><strong>Teacher Name</strong></label>
                        <input type="text" class="form-control" name="teacher_name" >
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for=""><strong>Teacher PDS ID</strong></label>
                        <input type="hidden" class="form-control" name="pre_teacher_pdsid" >
                        <input type="hidden" class="form-control" name="teacher_id" >
                        <input type="text" class="form-control" name="teacher_pdsid" >
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for=""><strong>Teacher Gender</strong></label>
                        <select class="form-control" name="teacher_gender" style="border: 1px solid gray">
                            
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for=""><strong>Teacher Designation</strong></label>
                        <select class="form-control" name="teacher_designation" style="border: 1px solid gray">
                            <option value="">Please Select</option>
                            {{-- <option value="প্রধান শিক্ষক">প্রধান শিক্ষক</option>
                            <option value="প্রধান শিক্ষক">সহকারী প্রধান শিক্ষক</option>
                            <option value="প্রধান শিক্ষক">সিনিয়র শিক্ষক</option>
                            <option value="প্রধান শিক্ষক">সহকারী শিক্ষক</option> --}}
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_email"><strong>Teacher Email</strong></label>
                        <input type="hidden" class="form-control" name="pre_teacher_email" >
                        <input type="text" class="form-control" name="teacher_email" >
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_phone"><strong>Teacher Phone</strong></label>
                        <input type="hidden" class="form-control" name="pre_teacher_phone" >
                        <input type="text" class="form-control" name="teacher_phone" >
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_subject"><strong>Teacher Subject</strong></label>
                        <select class="form-control" name="teacher_subject" style="border: 1px solid gray">
                            <option value="">Please Select</option>
                            <option value="বাংলা">বাংলা</option>
                            <option value="ইংরেজি">ইংরেজি</option>
                            <option value="গণিত">গণিত</option>
                            <option value="সামাজিক বিজ্ঞান">সামাজিক বিজ্ঞান</option>
                            <option value="ইসলাম ধর্ম">ইসলাম ধর্ম</option>
                            <option value="হিন্দু ধর্ম">হিন্দু ধর্ম</option>
                            <option value="ইংরেজি">ইংরেজি</option>
                            <option value="ভৌত বিজ্ঞান">ভৌত বিজ্ঞান</option>
                            <option value="রসায়ন">রসায়ন</option>
                            <option value="জীব বিজ্ঞান">জীব বিজ্ঞান</option>
                            <option value="ব্যবসায় শিক্ষা">ব্যবসায় শিক্ষা</option>
                            <option value="কৃষি শিক্ষা">কৃষি শিক্ষা</option>
                            <option value="শারীরিক শিক্ষা">শারীরিক শিক্ষা</option>
                            <option value="চারুকলা">চারুকলা</option>
                            <option value="অন্যান্য">অন্যান্য</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_dob"><strong>Teacher DOB</strong></label>
                        <input type="date" class="form-control" name="teacher_dob" >
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_joining_date"><strong>Teacher Joining Date</strong></label>
                        <input type="date" class="form-control" name="teacher_joining_date" >
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_division"><strong>Teacher Division</strong></label>
                        <select class="form-control" name="teacher_division" id="teacher_division" style="border: 1px solid gray">
                            @php
                                $divisions = DB::table('divisions')->get();
                            @endphp
                              <option value="">Please Select</option>
                            @foreach ($divisions as $division)
                            <option value="{{ $division->id }}">{{ $division->bn_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_district"><strong>Teacher District</strong></label>
                        <select class="form-control" name="teacher_district" id="teacher_district" style="border: 1px solid gray"></select>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_upazila"><strong>Teacher Upazila</strong></label>
                        <select class="form-control" name="teacher_upazila" id="teacher_upazila" style="border: 1px solid gray"></select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_address"><strong>Teacher Address</strong></label>
                        <textarea class="form-control" name="teacher_address" style="border: 1px solid gray"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teacher_degree"><strong>Teacher Degree</strong></label>
                        <textarea class="form-control" name="teacher_degree" style="border: 1px solid gray"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                        <label for="teache_image"><strong>Teacher Image</strong></label>
                        <input type="file" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])" class="form-control" name="teacher_image" accept="image/png,.jpg,.jpeg">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-2 text-center">
                        <label for="teache_image"><strong>Preview Image</strong></label><br>
                        <img class="mx-auto" id="blah2" width="100" height="100" />
                    </div>
                </div>
                <div class="modal-footer p-0 py-4">
                    <button type="button" class="btn btn-secondary btn-square" data-bs-dismiss="modal" id="edit_modal_close">Close</button>
                    <button type="submit" class="btn btn-primary btn-square" id="edit_teacher_button" data-bs-backdrop="static" data-bs-keyboard="false">Update teacher</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
{{-- End edit admin modal --}}
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Admins</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Teachers</li>
          </ol>
        </div>
      </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                  <h4 class="text-center">Teacher Lists</h4>
                </div>
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <button style="float: right" class="btn btn-info btn-square" data-bs-toggle="modal" data-bs-target="#exampleModalLong" style="cursor:pointer">Add Teacher</button>
                        </div>
                    </div>
                </div>
                <form class="form theme-form" action="" id="search_teacher_form" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-1">
                            <label for="teacher_name">Teacher Name</label>
                            <input type="text" class="form-control" name="teacher_name">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-1">
                            <label for="teacher_email">Teacher Email</label>
                            <input type="text" class="form-control" name="teacher_email">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="mb-1">
                            <label for="teacher_phone">Teacher Phone</label>
                            <input type="text" class="form-control" name="teacher_phone">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-12" style="line-height: 100px">
                        <div class="mb-1">
                            <button class="btn btn-primary btn-square form-control" id="search_teacher_button" type="submit">Search <i class="icofont icofont-job-search"></i></button>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-6 col-sm-12">
                        <button class="btn btn-danger btn-square" id="reset_button" type="button">Reset <i class="fa fa-refresh" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </form>
                <input type="hidden" id="my_id" value="{{ Auth::user()->id }}">
                <div class="card-body ibox-body d-none ">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('public/admin/assets/js/sweet-alert/sweetalert2.js')}}"></script>

<script src="{{ asset('public/admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
{{-- <script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/custom.js') }}"></script> --}}
<script src="{{ asset('public/admin/switchery/switchery.min.js')}}"></script>
<script src="{{ asset('public/admin/custom/all_teacher.js')}}"></script>
<script>
    $('#reset_button').click(function(){
        $('#search_admin_form').trigger('reset');
        $('.ibox-body').addClass(' d-none');
    })

    $('[name=teacher_gender]').change(function(){
        if($(this).val()==='পুরুষ'){
            $('[name=teacher_designation]').empty();
            $('[name=teacher_designation]').append('<option value="">Please Select</option><option value="প্রধান শিক্ষক">প্রধান শিক্ষক</option><option value="প্রধান শিক্ষক">সহকারী প্রধান শিক্ষক</option><option value="প্রধান শিক্ষক">সিনিয়র শিক্ষক</option><option value="প্রধান শিক্ষক">সহকারী শিক্ষক</option>');
            
        }else{
            $('[name=teacher_designation]').empty();
            $('[name=teacher_designation]').append('<option value="">Please Select</option><option value="প্রধান শিক্ষিকা">প্রধান শিক্ষিকা</option><option value="প্রধান শিক্ষিকা">সহকারী প্রধান শিক্ষিকা</option><option value="প্রধান শিক্ষিকা">সিনিয়র শিক্ষিকা</option><option value="প্রধান শিক্ষিকা">সহকারী শিক্ষিকা</option>');
        }
    })

    $('#edit_teacher_form [name=teacher_gender]').change(function(){
        if($(this).val()==='পুরুষ'){
            $('#edit_teacher_form [name=teacher_designation]').empty();
            $('#edit_teacher_form [name=teacher_designation]').append('<option value="">Please Select</option><option value="প্রধান শিক্ষক">প্রধান শিক্ষক</option><option value="সহকারী প্রধান শিক্ষক">সহকারী প্রধান শিক্ষক</option><option value="সিনিয়র শিক্ষক">সিনিয়র শিক্ষক</option><option value="সহকারী শিক্ষক">সহকারী শিক্ষক</option>');
            
        }else{
            $('#edit_teacher_form [name=teacher_designation]').empty();
            $('#edit_teacher_form [name=teacher_designation]').append('<option value="">Please Select</option><option value="প্রধান শিক্ষিকা">প্রধান শিক্ষিকা</option><option value="সহকারী প্রধান শিক্ষিকা">সহকারী প্রধান শিক্ষিকা</option><option value="সিনিয়র শিক্ষিকা">সিনিয়র শিক্ষিকা</option><option value="সহকারী শিক্ষিকা">সহকারী শিক্ষিকা</option>');
        }
    })
</script>
@endsection  