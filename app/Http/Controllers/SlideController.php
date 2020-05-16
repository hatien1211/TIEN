<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use Validator;
use Session;
class SlideController extends Controller
{
    public function getDanhSach(){
    	$slide = slide::all();
    	return view('admin.slide.danhsach')->with('slide',$slide);
    }

    public function getThem(){
    	return view('admin.slide.them');
    }

    public function postThem(Request $request){
    	Validator::make($request->all(),[
    		'slide_ten' => 'required|unique:slide'
    	],[
    		'slide_ten.required'=>'Bạn phải nhập đầy đủ thông tin',
            'slide_ten.unique'=>'Tên slide đã tồn tại'
    	])->validate();

    	$slide = new slide();

    	$slide->slide_ten = $request->slide_ten;

    	if($request->hasFile('slide_img')){
    		$file = $request->file('slide_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_addslide');
            }

    		$name = $file->getClientOriginalName();
            //$file = move("IMG/slide",$name);
            $slide->slide_img = $name;

    	}else{
    		$slide->slide_img=""; 
    	}

    	$slide->save();
        Session::flash('alert-info', 'Thêm thành công!!!');
        return redirect()->route('listsSlide');

    }

    public function getSua($id){
        $slide = slide::find($id);
        return view('admin.slide.sua')->with("slide",$slide);
    }

    public function postSua(Request $request, $id){
        Validator::make($request->all(),[
            'slide_ten' => 'required|unique:slide'
        ],[
            'slide_ten.required'=>'Bạn phải nhập đầy đủ thông tin',
            'slide_ten.unique'=>'Tên slide đã tồn tại'
        ])->validate();

        $slide = slide::find($id);

        $slide->slide_ten = $request->slide_ten;

        if($request->hasFile('slide_img')){
            $file = $request->file('slide_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_addslide');
            }

            $name = $file->getClientOriginalName();
            //$file = move("IMG/slide",$name);
            $slide->slide_img = $name;

        }else{
            $slide->slide_img=""; 
        }

        $slide->save();
        Session::flash('alert-info', 'Thêm thành công!!!');
        return redirect()->route('listsSlide');

    }
    

    public function getXoa($id){
        $slide = slide::find($id);
        $slide->delete();
        Session::flash('alert-success', 'Xóa thành công!!!');
        return redirect()->route('listsSlide');
    }



}
