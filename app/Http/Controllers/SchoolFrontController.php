<?php

namespace App\Http\Controllers;

use App\Models\AboutSchool;
use App\Models\Gallery;
use App\Models\StudentNumber;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolFrontController extends Controller
{
    public function ContactUs(){
        return view('contact_us');
    }

    public function SchoolGallery(Request $data){
        $galleries = Gallery::paginate(16);
        return view('school_gallery',compact('galleries'));
    }

    public function AllNotice(){
        $notices = DB::table('notices')->where('notice_delete',0)->where('notice_status','Active')->orderBy('notice_date','DESC')->paginate(15);
        return view('notice',compact('notices'));
    }

    public function AboutSchool(){
        $about = AboutSchool::first();
        return view('about_school',compact('about'));
    }

    public function GetTeachers(){
        $teachers = Teacher::where('teacher_status','Active')->where('teacher_delete',0)->orderBy('teacher_id','ASC')->get();
        return view('all_teachers',compact('teachers'));
    }

    public function TeacherProfile(){
        $teacher = Teacher::where('teacher_status','Active')->where('teacher_delete',0)->join('districts','teachers.teacher_district','districts.id')->join('divisions','teachers.teacher_division','divisions.id')->join('upazilas','teachers.teacher_upazila','upazilas.id')->select('teachers.*','divisions.bn_name as division','divisions.id as division_id','districts.bn_name as district','districts.id as district_id','upazilas.bn_name as upazila','upazilas.id as upazila_id')->where('teacher_id',request()->id)->first();
        return view('profile_details',compact('teacher'));
    }
    public function TotalStudents(){
        
        return view('total_students');
    }
}
