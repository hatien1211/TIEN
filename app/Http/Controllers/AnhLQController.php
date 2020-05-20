<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use App\anhlienquan;
use App\phong;
class AnhLQController extends Controller
{

	function __construct(){
		$anhlienquan = anhlienquan::all();
    	$phong = phong::all();

    	view()->share('anhlienquan',$anhlienquan);
    	view()->share('phong',$phong);
	}


    public function getDanhsach(){
    	
    	return view('admin.anhlienquan.danhsach');
    }

    public function getThem(){
    	return view('admin.anhlienquan.them');
    }


    public function postThem(Request $request){
    	Validator::make($request->all(),[
    		'p_id' => 'required'
    	],[
    		'p_id.required'=>'Bạn phải nhập đầy đủ thông tin'
            //'p_id.unique'=>'Anh đã tồn tại'
    	])->validate();

    	$anhlienquan = new anhlienquan();

    	$anhlienquan->p_id = $request->p_id;

    	if($request->hasFile('imglq_img')){
    		$file = $request->file('imglq_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_addanhlq');
            }

    		$name = $file->getClientOriginalName();
            
            $anhlienquan->imglq_img = $name;

    	}else{
    		$anhlienquan->imglq_img=""; 
    	}

    	$anhlienquan->save();
        Session::flash('alert-info', 'Thêm thành công!!!');
        return redirect()->route('listsanhlq');

    }
    public function getSua($id){
        $anhlienquan1 = anhlienquan::find($id);
        // return $anhlienquan1;
        return view('admin.anhlienquan.sua')->with('anhlienquan1',$anhlienquan1);
    }

    public function postSua(Request $request){
        Validator::make($request->all(),[
            'p_id' => 'required'
        ],[
            'p_id.required'=>'Bạn phải nhập đầy đủ thông tin'
            //'p_id.unique'=>'Anh đã tồn tại'
        ])->validate();

        $anhlienquan = new anhlienquan();

        $anhlienquan->p_id = $request->p_id;

        if($request->hasFile('imglq_img')){
            $file = $request->file('imglq_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_addanhlq');
            }

            $name = $file->getClientOriginalName();
            
            $anhlienquan->imglq_img = $name;

        }else{
            $anhlienquan->imglq_img=""; 
        }

        $anhlienquan->save();
        Session::flash('alert-info', 'Sửa thành công!!!');
        return redirect()->route('listsanhlq');

    }
    
    public function getXoa($id){
        $anhlienquan1 = anhlienquan::find($id);
        $anhlienquan1->delete();
         Session::flash('alert-info', 'Xóa thành công!!!');
        return redirect()->route('listsanhlq');
    }
}

