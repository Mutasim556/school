<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function AllNotice(Request $data){
        return view('admin.school.all_notice');
    }

    public function NoticeInsert(Request $data){
        $data->validate([
            'notice_title'=>'required|max:255',
            'notice_date'=>'required|date',
            'notice_file'=>'required|mimes:jpg,jpeg,pdf|max:2000',
            'notice_details'=>'required',
        ]);
        $file = $data->file('notice_file');
        $extension = $file->getClientOriginalExtension();
        $file_name = "notice-".date('Y-m-d')."-".time().'.'.$extension;
        $file->move(public_path('school/upload/notice'),$file_name);
        $create = Notice::create([
            'notice_title'=>$data->notice_title,
            'notice_date'=>$data->notice_date,
            'notice_file'=>'public/school/upload/notice/'.$file_name,
            'notice_details'=>$data->notice_details,
        ]);
        if($create){
            return $create;
        }
    }

    public function NoticeSearch(Request $data){
        $notices = DB::table('notices')->where('notice_delete',0);
        if($data->from_date){
            $notices = $notices->where('notice_date','>=',$data->from_date);
        }
        if($data->to_date){
            $notices = $notices->where('notice_date','<=',$data->to_date);
        }
        $notices = $notices->get();
        return $notices;
    }

    public function NoticeStatusUpdate(Request $data){
        $notice = Notice::where('notice_id',$data->id)->select('notice_status')->first();
        if($notice->notice_status=='Active'){
            Notice::where('notice_id',$data->id)->update([
                'notice_status' => 'Inactive'
            ]);
            $notice = Notice::where('notice_id',$data->id)->select('notice_id','notice_status')->first();
            return $notice;
        }else{
            Notice::where('notice_id',$data->id)->update([
                'notice_status' => 'Active'
            ]);
            $notice = Notice::where('notice_id',$data->id)->select('notice_id','notice_status')->first();
            return $notice;
        }
    }

    public function NoticeDelete(Request $data){
        Notice::where('notice_id',$data->id)->update([
            'notice_delete' => 1,
        ]);
        return 1;
    }
}
