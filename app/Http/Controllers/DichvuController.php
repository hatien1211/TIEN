<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dichvu;
use Validator;
use Session;
class DichvuController extends Controller
{
    public function getDanhSach(){
    	$dichvu=dichvu::all();
    	return view('admin.dichvu.danhsach')->with('dichvu',$dichvu);
    }


    public function getThem(){
    	return view('admin.dichvu.them');
    }


    public function postThem(Request $request){
    	Validator::make($request->all(), [
            'dv_ten' => 'required|unique:dichvu',
            'dv_thongtin' => 'required|min:8',
            
            ],[
            'dv_ten.required' => 'Bạn chưa nhập tên dịch vụ',
            'dv_ten.unique'=>'Tên dịch vụ đã tồn tại',
            'dv_thongtin.required'=>'Bạn chưa điền vào thông tin dịch vụ',
            'dv_thongtin.min'=>'Thông tin dịch vụ phải ít nhất 8 kí tự'
            ])->validate();

    	$dichvu = new dichvu();
        $dichvu->dv_ten = $request->dv_ten; 
        $dichvu->dv_thongtin = $request->dv_thongtin;
        
    	if($request->hasFile('dv_img')){
    		$file = $request->file('dv_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_adddichvu');
            }

    		$name = $file->getClientOriginalName();
            //$file = move("IMG/slide",$name);
            $dichvu->dv_img = $name;

    	}else{
    		$dichvu->dv_img=""; 
    	}

    	$dichvu->save();
        Session::flash('alert-info', 'Thêm thành công!!!');
        return redirect()->route('listsDichvu');
    }



    public function getSua($id){
    	$dichvu=dichvu::find($id);
    	return view('admin.dichvu.sua')->with('dichvu', $dichvu);
    }


    public function postSua(Request $request, $id){
    	Validator::make($request->all(), [
            'dv_ten' => 'required',
            'dv_thongtin' => 'required|min:8',
            
            ],[
            'dv_ten.required' => 'Bạn chưa nhập tên dịch vụ',
            //'dv_ten.unique'=>'Tên dịch vụ đã tồn tại',
            'dv_thongtin.required'=>'Bạn chưa điền vào thông tin dịch vụ',
            'dv_thongtin.min'=>'Thông tin dịch vụ phải ít nhất 8 kí tự'
            ])->validate();


    	$dichvu =dichvu::find($id);
        $dichvu->dv_ten = $request->dv_ten; 
        $dichvu->dv_thongtin = $request->dv_thongtin;
        
    	if($request->hasFile('dv_img')){
    		$file = $request->file('dv_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_adddichvu');
            }

    		$name = $file->getClientOriginalName();
            //$file = move("IMG/slide",$name);
            $dichvu->dv_img = $name;

    	}else{
    		$dichvu->dv_img=""; 
    	}

    	$dichvu->save();
        Session::flash('alert-seccess', 'Sửa thành công!!!');
        return redirect()->route('listsDichvu');
    }


    public function getXoa($id){
    	$dichvu=dichvu::find($id);
    	$dichvu->delete();
    	 Session::flash('alert-seccess', 'Xóa thành công!!!');
        return redirect()->route('listsDichvu');
    }
}
