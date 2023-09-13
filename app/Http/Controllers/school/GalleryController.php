<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function SchoolGallery(){
        $galleries = Gallery::paginate(12);
        return view('admin.school.school_gallery',compact('galleries'));
    }

    public function SchoolGalleryInsert(Request $data){

        $data->validate([
            'image_title'=>'required|max:255',
            'image_details'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png|max:2000',
        ]);
        $file = $data->file('image');
        $extension = $file->getClientOriginalExtension();
        $file_name = "gallery-".date('Y-m-d')."-".time().'.'.$extension;
        
        $file->move(public_path('school/upload/gallery'),$file_name);

        $create = Gallery::create([
            'gallery_title'=> $data->image_title,
            'gallery_details'=> $data->image_details,
            'gallery_image'=>'public/school/upload/gallery/'.$file_name,
        ]);

        return $create;
    }
    public function SchoolGalleryDelete(Request $data){
        $gallery = Gallery::where('gallery_id',$data->id)->first();
        unlink($gallery->gallery_image);
        $delete = Gallery::where('gallery_id',$data->id)->delete();
        return redirect()->back()->with('delete',1);
        
    }

    
}
