<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeacherController extends Controller
{
    public function SchoolTeacher(){
        return view('admin.school.all_teachers');
    }
    public function TeacherInsert(Request $data){
        $data->validate([
            'teacher_name' => 'required|max:50',
            'teacher_pdsid' => 'required|max:50|unique:teachers,teacher_pdsid',
            'teacher_gender' => 'required|max:20',
            'teacher_designation' => 'required|max:25',
            'teacher_email' => 'required|max:30|unique:teachers,teacher_email',
            'teacher_phone' => 'required|max:15|unique:teachers,teacher_phone',
            'teacher_subject' => 'max:25',
            'teacher_dob' => 'required|max:25|before:'.date('Y-m-d').'',
            'teacher_joining_date' => 'required|max:25|before:'.date('Y-m-d').'',
            'teacher_division' => 'required|max:25',
            'teacher_district' => 'required|max:25',
            'teacher_upazila' => 'required|max:25',
            'teacher_address' => 'required',
            'teacher_degree' => 'required',
            'teacher_image' => 'required|mimes:jpg,jpeg,png|max:200',
        ]);
        $file = $data->teacher_image;
        $extension = $file->getClientOriginalExtension();
        $file_name = str_replace(' ', '_',$data->teacher_name).'-'.time().'.'.$extension;
        
        // $file->move(public_path('school/upload/teachers'),$file_name);
        Image::make($data->teacher_image)->resize(300,300)->save(public_path('school/upload/teachers/'.$file_name));
        $create = Teacher::create([
            'teacher_name' => $data->teacher_name,
            'teacher_pdsid' => $data->teacher_pdsid,
            'teacher_gender' => $data->teacher_gender,
            'teacher_designation' => $data->teacher_designation,
            'teacher_email' => $data->teacher_email,
            'teacher_phone' => $data->teacher_phone,
            'teacher_subject' => $data->teacher_subject,
            'teacher_dob' =>$data->teacher_dob,
            'teacher_joining_date' =>$data->teacher_joining_date,
            'teacher_division' => $data->teacher_division,
            'teacher_district' => $data->teacher_district,
            'teacher_upazila' => $data->teacher_upazila,
            'teacher_address' => $data->teacher_address,
            'teacher_degree' => $data->teacher_degree,
            'teacher_image' => 'public/school/upload/teachers/'.$file_name,
        ]);

        if($create){
            return $create;
        }else{
            return response()->json([
                'message'=>'Something went wrong',
            ],422);
        }
    }

    public function SearchTeacher(Request $data){
        $teachers = Teacher::where('teacher_delete',0)->join('districts','teachers.teacher_district','districts.id')->join('divisions','teachers.teacher_division','divisions.id')->join('upazilas','teachers.teacher_upazila','upazilas.id');

        if($data->teacher_name){
            $teachers = $teachers->where('teacher_name','LIKE',"%".$data->teacher_name."%");
        }
        if($data->teacher_email){
            $teachers = $teachers->where('teacher_email','LIKE',"%".$data->teacher_email."%");
        }

        if($data->teacher_phone){
            $teachers = $teachers->where('teacher_phone','LIKE',"%".$data->teacher_phone."%");
        }

        

        $teachers = $teachers->orderBy('teacher_id','DESC')->select('teachers.*','divisions.bn_name as division','districts.bn_name as district','upazilas.bn_name as upazila')->get();
        return [
            'teachers'=>$teachers,
        ];
    }

    public function UpdateTeacherStatus(Request $data){
        $Teacher = Teacher::where('teacher_id',$data->id)->select('teacher_status')->first();
        if($Teacher->teacher_status=='Active'){
            Teacher::where('teacher_id',$data->id)->update([
                'teacher_status' => 'Inactive'
            ]);
            $Teacher = Teacher::where('teacher_id',$data->id)->select('teacher_id','teacher_status')->first();
            return $Teacher;
        }else{
            Teacher::where('teacher_id',$data->id)->update([
                'teacher_status' => 'Active'
            ]);
            $Teacher = Teacher::where('teacher_id',$data->id)->select('teacher_id','teacher_status')->first();
            return $Teacher;
        }
    }

    public function GetTeacherInfo(Request $data){
        $Teacher = Teacher::where('teacher_id',$data->id)->join('districts','teachers.teacher_district','districts.id')->join('divisions','teachers.teacher_division','divisions.id')->join('upazilas','teachers.teacher_upazila','upazilas.id')->select('teachers.*','divisions.bn_name as division','divisions.id as division_id','districts.bn_name as district','districts.id as district_id','upazilas.bn_name as upazila','upazilas.id as upazila_id')->first();
        return $Teacher;
    }

    public function UpdateTeacher(Request $data){
        
        $data->validate([
            'teacher_name' => 'required|max:50',
            'teacher_pdsid' => 'required|max:50',
            'teacher_gender' => 'required|max:20',
            'teacher_designation' => 'required|max:25',
            'teacher_email' => 'required|max:30',
            'teacher_phone' => 'required|max:15',
            'teacher_subject' => 'max:25',
            'teacher_dob' => 'required|max:25|before:'.date('Y-m-d').'',
            'teacher_joining_date' => 'required|max:25|before:'.date('Y-m-d').'',
            'teacher_division' => 'required|max:25',
            'teacher_district' => 'required|max:25',
            'teacher_upazila' => 'required|max:25',
            'teacher_address' => 'required',
            'teacher_degree' => 'required',
            'teacher_image' => 'mimes:jpg,jpeg,png|max:200',
        ]);
        if($data->file('teacher_image')){
            $tc = Teacher::where('teacher_id',$data->teacher_id)->first();
            unlink($tc->teacher_image);
            $file = $data->teacher_image;
            $extension = $file->getClientOriginalExtension();
            $file_name = str_replace(' ', '_',$data->teacher_name).'-'.time().'.'.$extension;
            Image::make($data->teacher_image)->resize(300,300)->save(public_path('school/upload/teachers/'.$file_name));
            $update = Teacher::where('teacher_id',$data->teacher_id)->update([
                'teacher_name' => $data->teacher_name,
                'teacher_pdsid' => $data->teacher_pdsid,
                'teacher_gender' => $data->teacher_gender,
                'teacher_designation' => $data->teacher_designation,
                'teacher_email' => $data->teacher_email,
                'teacher_phone' => $data->teacher_phone,
                'teacher_subject' => $data->teacher_subject,
                'teacher_dob' =>$data->teacher_dob,
                'teacher_joining_date' =>$data->teacher_joining_date,
                'teacher_division' => $data->teacher_division,
                'teacher_district' => $data->teacher_district,
                'teacher_upazila' => $data->teacher_upazila,
                'teacher_address' => $data->teacher_address,
                'teacher_degree' => $data->teacher_degree,
                'teacher_image' => 'public/school/upload/teachers/'.$file_name,
            ]);
        }else{
            $update = Teacher::where('teacher_id',$data->teacher_id)->update([
                'teacher_name' => $data->teacher_name,
                'teacher_pdsid' => $data->teacher_pdsid,
                'teacher_gender' => $data->teacher_gender,
                'teacher_designation' => $data->teacher_designation,
                'teacher_email' => $data->teacher_email,
                'teacher_phone' => $data->teacher_phone,
                'teacher_subject' => $data->teacher_subject,
                'teacher_dob' =>$data->teacher_dob,
                'teacher_joining_date' =>$data->teacher_joining_date,
                'teacher_division' => $data->teacher_division,
                'teacher_district' => $data->teacher_district,
                'teacher_upazila' => $data->teacher_upazila,
                'teacher_address' => $data->teacher_address,
                'teacher_degree' => $data->teacher_degree,
            ]);
        }
        

        if($update){
            $Teacher = Teacher::where('teacher_id',$data->teacher_id)->join('districts','teachers.teacher_district','districts.id')->join('divisions','teachers.teacher_division','divisions.id')->join('upazilas','teachers.teacher_upazila','upazilas.id')->select('teachers.*','divisions.bn_name as division','divisions.id as division_id','districts.bn_name as district','districts.id as district_id','upazilas.bn_name as upazila','upazilas.id as upazila_id')->first();
            return $Teacher;
        }else{
            return response()->json([
                'message'=>'Something went wrong',
            ],422);
        }
    }

    public function DeleteTeacher(Request $data){
        $Teacher = Teacher::where('teacher_id',$data->id)->update([
                'teacher_delete'=>1,
        ]);
        return [
            'message'=>1,
        ];
    }
}
