@extends('layouts.admin')

@section('title')
    Number Of Students
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/vendors/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/admin/croppie/croppie.css')}}" />
<link href="{{ asset('public/admin/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .border_gray{
            border: 1px solid gray;
        }
        .hr_color{
            background: gray;
        }
        a{
            color: white;
            font-weight: 700;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="card">
              <div class="card-header pb-0 mb-4">
                <h4 class="text-center">Number Of Students</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-xs-12">
                    <div class="nav flex-column nav-pills bg-info " id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Class Six</a><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Class Seven</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Class Eight</a><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Class Nine</a><a class="nav-link" id="v-pills-ten-tab" data-bs-toggle="pill" href="#v-pills-ten" role="tab" aria-controls="v-pills-ten" aria-selected="false">Class Ten</a></div>
                  </div>
                  <div class="col-sm-9 col-xs-12">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <p class="mb-0">
                            <h6 class="my-0">Day shift</h6>
                            <hr class="mb-0 hr_color">
                            <form action="theme form" id="class_six_form">
                                @csrf
                                <input type="hidden" name="class_shift" value="Day">
                                <input type="hidden" name="class_name" value="six">
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 " >
                                        <label for=""></label>
                                        <select class="form-control border_gray" name="section">
                                            <option value="">Please Select</option>
                                            <option value="ক">ক</option>
                                            <option value="খ">খ</option>
                                            <option value="গ">গ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>শিক্ষার্থী</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ছেলে</label>
                                                <input type="text" class="form-control border_gray" value="" name="boys">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মেয়ে</label>
                                                <input type="text" class="form-control border_gray" value="" name="girls">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মোট</label>
                                                <input type="text" class="form-control border_gray" value="" name="total" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>মুক্তিযোদ্ধা</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তানের সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children_of_children">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>প্রতিবন্ধি</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">অটিস্টিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="otistik">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">শারীরিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="physically_unfit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>বিভাগ</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">বিজ্ঞান</label>
                                                <input type="text" class="form-control border_gray" value="" name="science">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ব্যবসায় শিক্ষা</label>
                                                <input type="text" class="form-control border_gray" value="" name="commerce">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মানবিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="arts">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>ধর্ম</u></h6>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">মুসলিম</label>
                                                <input type="text" class="form-control border_gray" value="" name="muslim">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">হিন্দু</label>
                                                <input type="text" class="form-control border_gray" value="" name="hindu">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">বৌদ্ধ</label>
                                                <input type="text" class="form-control border_gray" value="" name="buddhism">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">খ্রিস্টান</label>
                                                <input type="text" class="form-control border_gray" value="" name="christian">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group px-0" >
                                        <button class="btn btn-primary btn-square" id="update_button" style="float: right">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <p class="mb-0">
                            <h6 class="my-0">Day shift</h6>
                            <hr class="mb-0 hr_color">
                            <form action="theme form" id="class_seven_form">
                                @csrf
                                <input type="hidden" name="class_shift" value="Day">
                                <input type="hidden" name="class_name" value="seven">
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 " >
                                        <label for=""></label>
                                        <select class="form-control border_gray" name="section">
                                            <option value="">Please Select</option>
                                            <option value="ক">ক</option>
                                            <option value="খ">খ</option>
                                            <option value="গ">গ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>শিক্ষার্থী</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ছেলে</label>
                                                <input type="text" class="form-control border_gray" value="" name="boys">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মেয়ে</label>
                                                <input type="text" class="form-control border_gray" value="" name="girls">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মোট</label>
                                                <input type="text" class="form-control border_gray" value="" name="total" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>মুক্তিযোদ্ধা</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তানের সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children_of_children">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>প্রতিবন্ধি</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">অটিস্টিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="otistik">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">শারীরিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="physically_unfit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>বিভাগ</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">বিজ্ঞান</label>
                                                <input type="text" class="form-control border_gray" value="" name="science">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ব্যবসায় শিক্ষা</label>
                                                <input type="text" class="form-control border_gray" value="" name="commerce">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মানবিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="arts">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>ধর্ম</u></h6>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">মুসলিম</label>
                                                <input type="text" class="form-control border_gray" value="" name="muslim">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">হিন্দু</label>
                                                <input type="text" class="form-control border_gray" value="" name="hindu">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">বৌদ্ধ</label>
                                                <input type="text" class="form-control border_gray" value="" name="buddhism">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">খ্রিস্টান</label>
                                                <input type="text" class="form-control border_gray" value="" name="christian">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group px-0" >
                                        <button class="btn btn-primary btn-square" id="update_button" style="float: right">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <p class="mb-0">
                            <h6 class="my-0">Day shift</h6>
                            <hr class="mb-0 hr_color">
                            <form action="theme form" id="class_eight_form">
                                @csrf
                                <input type="hidden" name="class_shift" value="Day">
                                <input type="hidden" name="class_name" value="eight">
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 " >
                                        <label for=""></label>
                                        <select class="form-control border_gray" name="section">
                                            <option value="">Please Select</option>
                                            <option value="ক">ক</option>
                                            <option value="খ">খ</option>
                                            <option value="গ">গ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>শিক্ষার্থী</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ছেলে</label>
                                                <input type="text" class="form-control border_gray" value="" name="boys">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মেয়ে</label>
                                                <input type="text" class="form-control border_gray" value="" name="girls">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মোট</label>
                                                <input type="text" class="form-control border_gray" value="" name="total" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>মুক্তিযোদ্ধা</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তানের সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children_of_children">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>প্রতিবন্ধি</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">অটিস্টিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="otistik">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">শারীরিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="physically_unfit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>বিভাগ</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">বিজ্ঞান</label>
                                                <input type="text" class="form-control border_gray" value="" name="science">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ব্যবসায় শিক্ষা</label>
                                                <input type="text" class="form-control border_gray" value="" name="commerce">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মানবিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="arts">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>ধর্ম</u></h6>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">মুসলিম</label>
                                                <input type="text" class="form-control border_gray" value="" name="muslim">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">হিন্দু</label>
                                                <input type="text" class="form-control border_gray" value="" name="hindu">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">বৌদ্ধ</label>
                                                <input type="text" class="form-control border_gray" value="" name="buddhism">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">খ্রিস্টান</label>
                                                <input type="text" class="form-control border_gray" value="" name="christian">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group px-0" >
                                        <button class="btn btn-primary btn-square" id="update_button" style="float: right">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <p class="mb-0">
                            <h6 class="my-0">Day shift</h6>
                            <hr class="mb-0 hr_color">
                            <form action="theme form" id="class_nine_form">
                                @csrf
                                <input type="hidden" name="class_shift" value="Day">
                                <input type="hidden" name="class_name" value="nine">
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 " >
                                        <label for=""></label>
                                        <select class="form-control border_gray" name="section">
                                            <option value="">Please Select</option>
                                            <option value="ক">ক</option>
                                            <option value="খ">খ</option>
                                            <option value="গ">গ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>শিক্ষার্থী</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ছেলে</label>
                                                <input type="text" class="form-control border_gray" value="" name="boys">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মেয়ে</label>
                                                <input type="text" class="form-control border_gray" value="" name="girls">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মোট</label>
                                                <input type="text" class="form-control border_gray" value="" name="total" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>মুক্তিযোদ্ধা</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তানের সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children_of_children">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>প্রতিবন্ধি</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">অটিস্টিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="otistik">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">শারীরিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="physically_unfit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>বিভাগ</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">বিজ্ঞান</label>
                                                <input type="text" class="form-control border_gray" value="" name="science">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ব্যবসায় শিক্ষা</label>
                                                <input type="text" class="form-control border_gray" value="" name="commerce">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মানবিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="arts">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>ধর্ম</u></h6>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">মুসলিম</label>
                                                <input type="text" class="form-control border_gray" value="" name="muslim">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">হিন্দু</label>
                                                <input type="text" class="form-control border_gray" value="" name="hindu">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">বৌদ্ধ</label>
                                                <input type="text" class="form-control border_gray" value="" name="buddhism">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">খ্রিস্টান</label>
                                                <input type="text" class="form-control border_gray" value="" name="christian">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group px-0" >
                                        <button class="btn btn-primary btn-square" id="update_button" style="float: right">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-ten" role="tabpanel" aria-labelledby="v-pills-ten-tab">
                        <p class="mb-0">
                            <h6 class="my-0">Day shift</h6>
                            <hr class="mb-0 hr_color">
                            <form action="theme form" id="class_ten_form">
                                @csrf
                                <input type="hidden" name="class_shift" value="Day">
                                <input type="hidden" name="class_name" value="ten">
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 " >
                                        <label for=""></label>
                                        <select class="form-control border_gray" name="section">
                                            <option value="">Please Select</option>
                                            <option value="ক">ক</option>
                                            <option value="খ">খ</option>
                                            <option value="গ">গ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>শিক্ষার্থী</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ছেলে</label>
                                                <input type="text" class="form-control border_gray" value="" name="boys">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মেয়ে</label>
                                                <input type="text" class="form-control border_gray" value="" name="girls">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মোট</label>
                                                <input type="text" class="form-control border_gray" value="" name="total" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>মুক্তিযোদ্ধা</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">সন্তানের সন্তান</label>
                                                <input type="text" class="form-control border_gray" value="" name="children_of_children">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>প্রতিবন্ধি</u></h6>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">অটিস্টিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="otistik">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6" >
                                                <label for="">শারীরিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="physically_unfit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>বিভাগ</u></h6>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">বিজ্ঞান</label>
                                                <input type="text" class="form-control border_gray" value="" name="science">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">ব্যবসায় শিক্ষা</label>
                                                <input type="text" class="form-control border_gray" value="" name="commerce">
                                            </div>
                                            <div class="form-group col-md-4 col-lg-4 " >
                                                <label for="">মানবিক</label>
                                                <input type="text" class="form-control border_gray" value="" name="arts">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 pt-2" style="border: 1px solid gray">
                                        <div class="row">
                                            <h6 class="text-center"><u>ধর্ম</u></h6>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">মুসলিম</label>
                                                <input type="text" class="form-control border_gray" value="" name="muslim">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">হিন্দু</label>
                                                <input type="text" class="form-control border_gray" value="" name="hindu">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">বৌদ্ধ</label>
                                                <input type="text" class="form-control border_gray" value="" name="buddhism">
                                            </div>
                                            <div class="form-group col-md-3 col-lg-3 " >
                                                <label for="">খ্রিস্টান</label>
                                                <input type="text" class="form-control border_gray" value="" name="christian">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group px-0" >
                                        <button class="btn btn-primary btn-square" id="update_button" style="float: right">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </p>
                      </div>
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
<script src="{{ asset('public/admin/switchery/switchery.min.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/sweet-alert/sweetalert2.js')}}"></script>
<script src="{{ asset('public/admin/custom/all_students.js')}}"></script>
@endsection