@extends('layouts.admin')
@section('title')
    Others Option
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/datatable-extension.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/sweetalert2.min.css')}}">
<link href="{{ asset('public/admin/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')


{{--Edit Modal Start --}}

<div class="modal fade" id="exampleModalLongEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit notice</h5>
        <button class="btn btn-sm btn-danger py-1 px-2" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" ></i></button>
      </div>
      <div class="modal-body">
          <form class="theme-form" action="" id="edit_notice_form" method="POST">
              @csrf
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      <label for=""><strong>Name</strong></label>
                      <input type="text" class="form-control" name="notice_name" id="edit_name">
                      <input type="hidden" class="form-control" name="notice_id" id="notice_id">
                      <input type="hidden" class="form-control" id="trid">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                      <label for=""><strong>Phone</strong></label>
                      <input type="text" class="form-control" name="notice_phone" id="edit_phone">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                    <label for=""><strong>Address</strong></label>
                    <textarea rows="5" class="form-control" name="notice_address" id="edit_address"></textarea>
                </div>
              </div>
              <div class="modal-footer p-0 py-4">
                  <button type="button" class="btn btn-secondary btn-square" data-bs-dismiss="modal" id="edit_modal_close">Close</button>
                  <button type="submit" class="btn btn-primary btn-square" id="edit_notice_button" data-bs-backdrop="static" data-bs-keyboard="false">Update notice</button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>

{{-- End Edit Modal --}}
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Notices</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="user"></i></a></li>
            <li class="breadcrumb-item">School Section</li>
            <li class="breadcrumb-item">notices</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
        
        <div class="col-sm-12 col-xl-8 mx-auto">
          <div class="card">
            <div class="card-header pb-0">
              <h4>Notices</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs border-tab nav-danger" id="info-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="add-notice" data-bs-toggle="tab" href="#anotice" role="tab" aria-controls="anotice" aria-selected="true"><i class="fa fa-hospital-o"></i>Add Notice</a></li>
                <li class="nav-item"><a class="nav-link" id="view-notice" data-bs-toggle="tab" href="#vnotice" role="tab" aria-controls="vnotice" aria-selected="false"><i class="fa fa-h-square"></i>View Notice</a></li>
              </ul>
              <div class="tab-content" id="info-tabContent">
                <div class="tab-pane fade show active" id="anotice" role="tabpanel" aria-labelledby="add-notice">
                  <p class="mb-0">
                      <form class="theme-form" action="" method="POST" id="notice_insert_form" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="form-group col-xl-12">
                              <label for="notice_title">Notice Title</label>
                              <input type="text" class="form-control" name="notice_title">
                              <span id="notice_title_error" class="text-danger"></span>
                            </div>
                            <div class="form-group col-xl-6">
                              <label for="notice_date">Notice Date</label>
                              <input type="date" class="form-control" name="notice_date">
                              <span id="notice_date_error" class="text-danger"></span>
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="notice_file">Notice File</label>
                                <input type="file" class="form-control" name="notice_file">
                                <span id="notice_file_error" class="text-danger"></span>
                            </div>
                            <div class="form-group col-xl-12">
                              <label for="">Notice Details</label>
                              <textarea rows="5" class="form-control" name="notice_details"></textarea>
                              <span id="notice_details_error" class="text-danger"></span>
                            </div>
                            <div class="form-group col-xl-12" style="text-align: right;float:right">
                              <button id="notice_insert_button" type="submit" class="btn btn-danger btn-square " >Add</button>
                          </div>
                          </div>
                      </form>
                  </p>
                </div>
                
                <div class="tab-pane fade" id="vnotice" role="tabpanel" aria-labelledby="view-notice">
                  <p class="mb-0">
                    <form class="theme-form" action="" method="POST" id="notice_search_form">
                        @csrf
                        <div class="row">
                          <div class="form-group col-xl-6">
                            <label for="from_date">From</label>
                            <input type="date" class="form-control" name="from_date">
                            <span id="from_date_error" class="text-danger"></span>
                          </div>
                          <div class="form-group col-xl-6">
                            <label for="to_date">To</label>
                            <input type="date" class="form-control" name="to_date">
                            <span id="to_date_error" class="text-danger"></span>
                          </div>
                          <div class="form-group col-xl-12" style="text-align: right;float:right">
                            <button id="reset_button" type="button" class="btn btn-danger btn-square ">Reset</button>
                            <button id="notice_search_button" type="submit" class="btn btn-success btn-square " >Search</button>
                          </div>
                          {{-- <div class="form-group col-xl-12" style="text-align: left;float:left">
                            <button id="reset_button" type="buuton" class="btn btn-danger btn-square " >Reset</button>
                          </div> --}}
                        </div>
                    </form>
                  </p>
                  <div id="notice_table" class="">

                  </div>
                </div>
                
              </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
@section('js')
{{-- <script src="{{ asset('public/admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
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
<script src="{{ asset('public/admin/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script> --}}
<script src="{{ asset('public/admin/switchery/switchery.min.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/sweet-alert/sweetalert2.js')}}"></script>
<script src="{{ asset('public/admin/custom/notice_board.js')}}"></script>
<script>
  $('#reset_button').click(function(){
      $('#notice_search_form').trigger('reset');
      $('#notice_table').addClass(' d-none');
  })
  
</script>

@endsection