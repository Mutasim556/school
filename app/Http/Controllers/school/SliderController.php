<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function SchoolMainSlider(){
        $sliders = MainSlider::where('main_slider_delete',0)->orderBy('main_slider_id','DESC')->get();
        return view('admin.school.main_slider',compact('sliders'));
    }

    public function SchoolMainSliderInsert(Request $data){
        $data->validate([
            'main_slider_title'=>'required|max:255',
            'main_slider_image'=>'required|max:2000|mimes:png,jpg,jpeg',
        ]);

        $file = $data->file('main_slider_image');
        $extension = $file->getClientOriginalExtension();
        $file_name = "main_slider-".time().'.'.$extension;
        
        $file->move(public_path('school/upload/home_slide'),$file_name);
        $create = MainSlider::create([
            'main_slider_title'=>$data->main_slider_title,
            'main_slider_image'=>'public/school/upload/home_slide/'.$file_name,
        ]);

        if($create){
            return 1;
        }
    }

    public function DeleteMainSlider(Request $data){
        $logo = MainSlider::where('main_slider_id',request()->id)->first();
        unlink($logo->main_slider_image);
        MainSlider::where('main_slider_id',request()->id)->delete();
        return 1;
    }
}
