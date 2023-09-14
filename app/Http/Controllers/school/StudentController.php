<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\StudentNumber;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentNumber(){
        return view('admin.school.number_of_student');
    }

    public function GetStudentNumber(Request $data){
        $data = StudentNumber::where('shift',$data->shift)->where('class',$data->class)->where('section',$data->section)->first();
        if($data){
            return $data;
        }else{
            return 0;
        }
        
    }
    public function UpdateStudentNumber(Request $data){
        $data->validate([
            'section'=>'required|max:5',
            'class_shift'=>'required|max:5',
            'class_name'=>'required|max:10',
            'boys'=>'required|max:5',
            'girls'=>'required|max:5',
            // 'total'=>'required|max:10',
            'children'=>'required|max:5',
            'children_of_children'=>'required|max:5',
            'otistik'=>'required|max:5',
            'physically_unfit'=>'required|max:5',
            'science'=>'required|max:5',
            'commerce'=>'required|max:5',
            'arts'=>'required|max:5',
            'muslim'=>'required|max:5',
            'hindu'=>'required|max:5',
            'christian'=>'required|max:5',
            'buddhism'=>'required|max:5',
        ]);


        $update = StudentNumber::where('shift',$data->class_shift)->where('class',$data->class_name)->where('section',$data->section)->update([
            'boys'=>$data->boys,
            'girls'=>$data->girls,
            'children'=>$data->children,
            'children_of_children'=>$data->children_of_children,
            'otistik'=>$data->otistik,
            'physically_unfit'=>$data->physically_unfit,
            'science'=>$data->science,
            'commerce'=>$data->commerce,
            'arts'=>$data->arts,
            'muslim'=>$data->muslim,
            'hindu'=>$data->hindu,
            'christian'=>$data->christian,
            'buddhism'=>$data->buddhism,
        ]);

        if($update){
            return $data->boys+$data->girls;
        }else{
            return response()->json([
                'message'=>'Something went wrong',
            ],422);
        } 
        
    }
}
