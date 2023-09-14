@extends('layouts.school')
@section('title')
 অধ্যয়নরত শিক্ষার্থীর সংখ্যা
@endsection
@section('content')
{{-- <div class="space pt-5"> --}}
    <div class="container py-5">
        <div class="table-responsive">
            <h5 class="text-center">অধ্যয়নরত শিক্ষার্থীর সংখ্যা</h5>
            <table class="table table-bordered">
                
                <tr class="text-center bg-theme ">
                    <th class="text-white" colspan="3"></th>
                    <th class="text-white" colspan="3">শিক্ষার্থী</th>
                    <th class="text-white" colspan="4">ধর্ম</th>
                    <th class="text-white" colspan="3">বিভাগ</th>
                    <th class="text-white" colspan="2">মুক্তিযোদ্ধা</th>
                    <th class="text-white" colspan="2">প্রতিবন্ধি</th>
                </tr>
                <tr>
                    <td>শ্রেণি</td>
                    <td>শিফট</td>
                    <td>সেকশন</td>
                    <td>ছেলে</td>
                    <td>মেয়ে</td>
                    <td>মোট</td>
                    <td>মুসলিম</td>
                    <td>হিন্দু</td>
                    <td>বৌদ্ধ</td>
                    <td>খ্রিস্টান</td>
                    <td>বিজ্ঞান</td>
                    <td>ব্যব.শি</td>
                    <td>মানবিক</td>
                    <td>সন্তান</td>
                    <td>স.সন্তান</td>
                    <td>অটিস্টিক</td>
                    <td>শারীরিক</td>
                </tr>
                @php
                    $total_students_six = DB::table('student_numbers')->where('class','six')->orderBy('id','ASC')->get();
                    $sixp=  0;
                @endphp

                <tr>
                    <td class="text-center" style="line-height:{{ $total_students_six->count()*2 }}00%" rowspan="{{ $total_students_six->count() }}">Six</td>
                    <td>{{ $total_students_six[0]->shift }}</td>
                    <td>{{ $total_students_six[0]->section }}</td>
                    <td>{{ $total_students_six[0]->boys }}</td>
                    <td>{{ $total_students_six[0]->girls }}</td>
                    <td>{{ $total_students_six[0]->girls+$total_students_six[0]->boys }}</td>
                    <td>{{ $total_students_six[0]->muslim }}</td>
                    <td>{{ $total_students_six[0]->hindu }}</td>
                    <td>{{ $total_students_six[0]->buddhism }}</td>
                    <td>{{ $total_students_six[0]->christian }}</td>
                    <td>{{ $total_students_six[0]->science }}</td>
                    <td>{{ $total_students_six[0]->arts }}</td>
                    <td>{{ $total_students_six[0]->commerce }}</td>
                    <td>{{ $total_students_six[0]->children }}</td>
                    <td>{{ $total_students_six[0]->children_of_children }}</td>
                    <td>{{ $total_students_six[0]->otistik }}</td>
                    <td>{{ $total_students_six[0]->physically_unfit }}</td>
                </tr>
                @if ($total_students_six->count()>1)
                    @foreach ($total_students_six as $total_student_six)
                    @php
                        if($sixp==0){
                            $sixp++;
                            continue;
                        }
                    @endphp
                    <tr>
                        <td>{{ $total_student_six->shift }}</td>
                        <td>{{ $total_student_six->section }}</td>
                        <td>{{ $total_student_six->boys }}</td>
                        <td>{{ $total_student_six->girls }}</td>
                        <td>{{ $total_student_six->girls+$total_student_six->boys }}</td>
                        <td>{{ $total_student_six->muslim }}</td>
                        <td>{{ $total_student_six->hindu }}</td>
                        <td>{{ $total_student_six->buddhism }}</td>
                        <td>{{ $total_student_six->christian }}</td>
                        <td>{{ $total_student_six->science }}</td>
                        <td>{{ $total_student_six->arts }}</td>
                        <td>{{ $total_student_six->commerce }}</td>
                        <td>{{ $total_student_six->children }}</td>
                        <td>{{ $total_student_six->children_of_children }}</td>
                        <td>{{ $total_student_six->otistik }}</td>
                        <td>{{ $total_student_six->physically_unfit }}</td>
                    </tr>
                    @endforeach
                @endif
                
                

                @php
                    $total_students_seven = DB::table('student_numbers')->where('class','seven')->orderBy('id','ASC')->get();
                    $sevenp=  0;
                @endphp

                <tr>
                    <td class="text-center" style="line-height:{{ $total_students_seven->count()*2 }}00%" rowspan="{{ $total_students_seven->count() }}">Seven</td>
                    <td>{{ $total_students_seven[0]->shift }}</td>
                    <td>{{ $total_students_seven[0]->section }}</td>
                    <td>{{ $total_students_seven[0]->boys }}</td>
                    <td>{{ $total_students_seven[0]->girls }}</td>
                    <td>{{ $total_students_seven[0]->girls+$total_students_seven[0]->boys }}</td>
                    <td>{{ $total_students_seven[0]->muslim }}</td>
                    <td>{{ $total_students_seven[0]->hindu }}</td>
                    <td>{{ $total_students_seven[0]->buddhism }}</td>
                    <td>{{ $total_students_seven[0]->christian }}</td>
                    <td>{{ $total_students_seven[0]->science }}</td>
                    <td>{{ $total_students_seven[0]->arts }}</td>
                    <td>{{ $total_students_seven[0]->commerce }}</td>
                    <td>{{ $total_students_seven[0]->children }}</td>
                    <td>{{ $total_students_seven[0]->children_of_children }}</td>
                    <td>{{ $total_students_seven[0]->otistik }}</td>
                    <td>{{ $total_students_seven[0]->physically_unfit }}</td>
                </tr>
                @if ($total_students_seven->count()>1)
                    @foreach ($total_students_seven as $total_student_seven)
                        @php
                            if($sevenp==0){
                                $sevenp++;
                                continue;
                            }
                        @endphp
                        <tr>
                            <td>{{ $total_student_seven->shift }}</td>
                            <td>{{ $total_student_seven->section }}</td>
                            <td>{{ $total_student_seven->boys }}</td>
                            <td>{{ $total_student_seven->girls }}</td>
                            <td>{{ $total_student_seven->girls+$total_student_seven->boys }}</td>
                            <td>{{ $total_student_seven->muslim }}</td>
                            <td>{{ $total_student_seven->hindu }}</td>
                            <td>{{ $total_student_seven->buddhism }}</td>
                            <td>{{ $total_student_seven->christian }}</td>
                            <td>{{ $total_student_seven->science }}</td>
                            <td>{{ $total_student_seven->arts }}</td>
                            <td>{{ $total_student_seven->commerce }}</td>
                            <td>{{ $total_student_seven->children }}</td>
                            <td>{{ $total_student_seven->children_of_children }}</td>
                            <td>{{ $total_student_seven->otistik }}</td>
                            <td>{{ $total_student_seven->physically_unfit }}</td>
                        </tr>
                    @endforeach
                @endif

                {{-- Eight --}}
                
                @php
                    $total_students_eight = DB::table('student_numbers')->where('class','eight')->orderBy('id','ASC')->get();
                    $eightp=  0;
                @endphp

                <tr>
                    <td class="text-center" style="line-height:{{ $total_students_eight->count()*2 }}00%" rowspan="{{ $total_students_eight->count() }}">Eight</td>
                    <td>{{ $total_students_eight[0]->shift }}</td>
                    <td>{{ $total_students_eight[0]->section }}</td>
                    <td>{{ $total_students_eight[0]->boys }}</td>
                    <td>{{ $total_students_eight[0]->girls }}</td>
                    <td>{{ $total_students_eight[0]->girls+$total_students_eight[0]->boys }}</td>
                    <td>{{ $total_students_eight[0]->muslim }}</td>
                    <td>{{ $total_students_eight[0]->hindu }}</td>
                    <td>{{ $total_students_eight[0]->buddhism }}</td>
                    <td>{{ $total_students_eight[0]->christian }}</td>
                    <td>{{ $total_students_eight[0]->science }}</td>
                    <td>{{ $total_students_eight[0]->arts }}</td>
                    <td>{{ $total_students_eight[0]->commerce }}</td>
                    <td>{{ $total_students_eight[0]->children }}</td>
                    <td>{{ $total_students_eight[0]->children_of_children }}</td>
                    <td>{{ $total_students_eight[0]->otistik }}</td>
                    <td>{{ $total_students_eight[0]->physically_unfit }}</td>
                </tr>
                @if ($total_students_eight->count()>1)
                    @foreach ($total_students_eight as $total_student_eight)
                        @php
                            if($eightp==0){
                                $eightp++;
                                continue;
                            }
                        @endphp
                        <tr>
                            <td>{{ $total_student_eight->shift }}</td>
                            <td>{{ $total_student_eight->section }}</td>
                            <td>{{ $total_student_eight->boys }}</td>
                            <td>{{ $total_student_eight->girls }}</td>
                            <td>{{ $total_student_eight->girls+$total_student_eight->boys }}</td>
                            <td>{{ $total_student_eight->muslim }}</td>
                            <td>{{ $total_student_eight->hindu }}</td>
                            <td>{{ $total_student_eight->buddhism }}</td>
                            <td>{{ $total_student_eight->christian }}</td>
                            <td>{{ $total_student_eight->science }}</td>
                            <td>{{ $total_student_eight->arts }}</td>
                            <td>{{ $total_student_eight->commerce }}</td>
                            <td>{{ $total_student_eight->children }}</td>
                            <td>{{ $total_student_eight->children_of_children }}</td>
                            <td>{{ $total_student_eight->otistik }}</td>
                            <td>{{ $total_student_eight->physically_unfit }}</td>
                        </tr>
                    @endforeach
                @endif

                {{-- Nine --}}
                
                @php
                    $total_students_nine = DB::table('student_numbers')->where('class','nine')->orderBy('id','ASC')->get();
                    $ninep=  0;
                @endphp

                <tr>
                    <td class="text-center" style="line-height:{{ $total_students_nine->count()*2 }}00%" rowspan="{{ $total_students_nine->count() }}">Nine</td>
                    <td>{{ $total_students_nine[0]->shift }}</td>
                    <td>{{ $total_students_nine[0]->section }}</td>
                    <td>{{ $total_students_nine[0]->boys }}</td>
                    <td>{{ $total_students_nine[0]->girls }}</td>
                    <td>{{ $total_students_nine[0]->girls+$total_students_nine[0]->boys }}</td>
                    <td>{{ $total_students_nine[0]->muslim }}</td>
                    <td>{{ $total_students_nine[0]->hindu }}</td>
                    <td>{{ $total_students_nine[0]->buddhism }}</td>
                    <td>{{ $total_students_nine[0]->christian }}</td>
                    <td>{{ $total_students_nine[0]->science }}</td>
                    <td>{{ $total_students_nine[0]->arts }}</td>
                    <td>{{ $total_students_nine[0]->commerce }}</td>
                    <td>{{ $total_students_nine[0]->children }}</td>
                    <td>{{ $total_students_nine[0]->children_of_children }}</td>
                    <td>{{ $total_students_nine[0]->otistik }}</td>
                    <td>{{ $total_students_nine[0]->physically_unfit }}</td>
                </tr>
                @if ($total_students_nine->count()>1)
                    @foreach ($total_students_nine as $total_student_nine)
                        @php
                            if($ninep==0){
                                $ninep++;
                                continue;
                            }
                        @endphp
                        <tr>
                            <td>{{ $total_student_nine->shift }}</td>
                            <td>{{ $total_student_nine->section }}</td>
                            <td>{{ $total_student_nine->boys }}</td>
                            <td>{{ $total_student_nine->girls }}</td>
                            <td>{{ $total_student_nine->girls+$total_student_nine->boys }}</td>
                            <td>{{ $total_student_nine->muslim }}</td>
                            <td>{{ $total_student_nine->hindu }}</td>
                            <td>{{ $total_student_nine->buddhism }}</td>
                            <td>{{ $total_student_nine->christian }}</td>
                            <td>{{ $total_student_nine->science }}</td>
                            <td>{{ $total_student_nine->arts }}</td>
                            <td>{{ $total_student_nine->commerce }}</td>
                            <td>{{ $total_student_nine->children }}</td>
                            <td>{{ $total_student_nine->children_of_children }}</td>
                            <td>{{ $total_student_nine->otistik }}</td>
                            <td>{{ $total_student_nine->physically_unfit }}</td>
                        </tr>
                    @endforeach
                    
                @endif

                {{-- Ten --}}
                
                @php
                    $total_students_ten = DB::table('student_numbers')->where('class','ten')->orderBy('id','ASC')->get();
                    $tenp=  0;
                @endphp

                <tr>
                    <td class="text-center" style="line-height:{{ $total_students_ten->count()*2 }}00%" rowspan="{{ $total_students_ten->count() }}">Ten</td>
                    <td>{{ $total_students_ten[0]->shift }}</td>
                    <td>{{ $total_students_ten[0]->section }}</td>
                    <td>{{ $total_students_ten[0]->boys }}</td>
                    <td>{{ $total_students_ten[0]->girls }}</td>
                    <td>{{ $total_students_ten[0]->girls+$total_students_ten[0]->boys }}</td>
                    <td>{{ $total_students_ten[0]->muslim }}</td>
                    <td>{{ $total_students_ten[0]->hindu }}</td>
                    <td>{{ $total_students_ten[0]->buddhism }}</td>
                    <td>{{ $total_students_ten[0]->christian }}</td>
                    <td>{{ $total_students_ten[0]->science }}</td>
                    <td>{{ $total_students_ten[0]->arts }}</td>
                    <td>{{ $total_students_ten[0]->commerce }}</td>
                    <td>{{ $total_students_ten[0]->children }}</td>
                    <td>{{ $total_students_ten[0]->children_of_children }}</td>
                    <td>{{ $total_students_ten[0]->otistik }}</td>
                    <td>{{ $total_students_ten[0]->physically_unfit }}</td>
                </tr>
                @if ($total_students_ten->count()>1)
                    @foreach ($total_students_ten as $total_student_ten)
                        @php
                            if($tenp==0){
                                $tenp++;
                                continue;
                            }
                        @endphp
                        <tr>
                            <td>{{ $total_student_ten->shift }}</td>
                            <td>{{ $total_student_ten->section }}</td>
                            <td>{{ $total_student_ten->boys }}</td>
                            <td>{{ $total_student_ten->girls }}</td>
                            <td>{{ $total_student_ten->girls+$total_student_ten->boys }}</td>
                            <td>{{ $total_student_ten->muslim }}</td>
                            <td>{{ $total_student_ten->hindu }}</td>
                            <td>{{ $total_student_ten->buddhism }}</td>
                            <td>{{ $total_student_ten->christian }}</td>
                            <td>{{ $total_student_ten->science }}</td>
                            <td>{{ $total_student_ten->arts }}</td>
                            <td>{{ $total_student_ten->commerce }}</td>
                            <td>{{ $total_student_ten->children }}</td>
                            <td>{{ $total_student_ten->children_of_children }}</td>
                            <td>{{ $total_student_ten->otistik }}</td>
                            <td>{{ $total_student_ten->physically_unfit }}</td>
                        </tr>
                    @endforeach
                    
                @endif
            </table>
        </div>
    </div>
{{-- </div> --}}
@endsection