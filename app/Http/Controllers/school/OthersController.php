<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\AboutSchool;
use App\Models\Address;
use App\Models\HeadmasterSpeech;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OthersController extends Controller
{
    public function SchoolIntroduction(Request $data){
        $about = AboutSchool::first();
        return view('admin.school.school_intro',compact('about'));
    }
    public function SchoolIntroductionUpdate(Request $data){
        $data->validate([
            'about_school'=>'required',
        ]);
        $update = AboutSchool::where('about_school_id',$data->about_school_id)->update([
            'about_school'=>$data->about_school,
        ]);
        if($update){
            return $update;
        }
    }
    public function HeadmasterSpeech(Request $data){
        $headmaster = HeadmasterSpeech::first();
        return view('admin.school.headmaster_speech',compact('headmaster'));
    }
    public function HeadmasterSpeechUpdate(Request $data){
        $data->validate([
            'headmaster_speech'=>'required',
            'headmaster_image'=>'max:2000|mimes:jpg,jpeg,png',
        ]);
        if($data->headmaster_image){
            $file = $data->file('headmaster_image');
            $extension = $file->getClientOriginalExtension();
            $file_name = "headmaster-".time().'.'.$extension;
            
            $file->move(public_path('school/upload/headmaster'),$file_name);
            $update = HeadmasterSpeech::where('headmaster_speech_id',$data->headmaster_speech_id)->update([
                'headmaster_speech'=>$data->headmaster_speech,
                'headmaster_image'=>'public/school/upload/headmaster/'.$file_name,
            ]);
        }else{
            $update = HeadmasterSpeech::where('headmaster_speech_id',$data->headmaster_speech_id)->update([
                'headmaster_speech'=>$data->headmaster_speech,
            ]);
        }
        
        if($update){
            return $update;
        }
    }

    public function AddressContact(){
        $address = Address::first();
        return view('admin.school.address_contact',compact('address'));
    }

    public function SchoolAddressUpdate(Request $data){
        $data->validate([
            'school_address'=>'required',
            'school_phone'=>'required',
            'school_email'=>'required',
        ]);
        $update = Address::where('address_id',1)->update([
            'school_address'=> $data->school_address,
            'school_phone'=> $data->school_phone,
            'school_email'=> $data->school_email,
            'school_location_link'=> $data->school_location_link,
            'school_facebook_link'=> $data->school_facebook_link,
            'school_linkedin_link'=> $data->school_linkedin_link,
            'school_youtube_link'=> $data->school_youtube_link,
        ]);

        return $update;
    }

    public function GetDistrict(Request $data){
        $district = DB::table('districts')->where('division_id',$data->id)->get();
        return $district;
    }

    public function GetUpazila(Request $data){
        $upazila = DB::table('upazilas')->where('district_id',$data->id)->get();
        return $upazila;
    }

    
}
