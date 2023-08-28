<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    public function AllDoctors(){
        return view('doctor.all_doctors');
    }


    //speciality
    public function DoctorSpeciality(){
        return view('doctor.doctor_speciality');
    }
}
