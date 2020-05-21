<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phong;
use Validator;
use Session;
class PhongController extends Controller
{
    public function getDanhSach(){
        $phong=phong::all();
        return view('admin.phong.danhsach')->with('phong',$phong);
    }

    public function getThem(){
        return view('admin.phong.them');
    }

    public function postThem(Request $request){
        Validator::make($request->all(), [ 
            'p_ten' => 'required|unique:phong',
            'p_thongtin' => 'required',
            'p_tomtat' => 'required',
            'p_slmax' => 'required',
            'p_slp' => 'required',
            'p_gia' => 'required|min:6'
            
            ],[
            'p_ten.required' => 'Bạn chưa nhập tên phòng',
            'p_ten.unique'=>'Tên phòng đã tồn tại',
            'p_thongtin.required'=>'Bạn chưa điền vào thông tin phòng',
            'p_tomtat.required'=>'Bạn chưa điền vào thông tin tóm tắt của phòng',
            'p_slmax.required'=>'Bạn chưa điền vào thông tin số lượng người tối đa của phòng',
            'p_slp.required'=>'Bạn chưa điền vào thông tin số lượng phòng',
            'p_gia.required'=>'Bạn chưa điền vào thông tin gia của phòng',
            'dv_gia.min'=>'Thông tin giá phòng phải ít nhất 8 kí tự'
            ])->validate();

        $phong = new phong();
        $phong->p_ten = $request->p_ten; 
        $phong->p_thongtin = $request->p_thongtin;
        $phong->p_tomtat = $request->p_tomtat;
        $phong->p_slmax = $request->p_slmax;
        $phong->p_slp = $request->p_slp; 
        $phong->p_gia = $request->p_gia;
        
        
        if($request->hasFile('p_img')){
            $file = $request->file('p_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_addphong');
            }

            $name = $file->getClientOriginalName();
           //$file->storeAs("public/IMG/phong",$name);
            $phong->p_img = $name;

        }else{
            $phong->p_img=""; 
        }

        $phong->save();
        Session::flash('alert-info', 'Thêm thành công!!!');
        return redirect()->route('listsPhong');
    }


    public function getSua($id){
        $phong = phong::find($id);
        return view('admin.phong.sua')->with('phong',$phong);
    }

    public function postSua(Request $request, $id){

        Validator::make($request->all(), [ 
            'p_ten' => 'required',
            'p_thongtin' => 'required',
            'p_tomtat' => 'required',
            'p_slmax' => 'required',
            'p_slp' => 'required',
            'p_gia' => 'required|min:6'
            ],[
            'p_ten.required' => 'Bạn chưa nhập tên phòng',
            'p_ten.unique'=>'Tên phòng đã tồn tại',
            'p_thongtin.required'=>'Bạn chưa điền vào thông tin phòng',
            'p_tomtat.required'=>'Bạn chưa điền vào thông tin tóm tắt của phòng',
            'p_slmax.required'=>'Bạn chưa điền vào thông tin số lượng người tối đa của phòng',
            'p_slp.required'=>'Bạn chưa điền vào thông tin số lượng phòng',
            'p_gia.required'=>'Bạn chưa điền vào thông tin gia của phòng',
            'dv_gia.min'=>'Thông tin giá phòng phải ít nhất 8 kí tự'
            ])->validate();

        $phong =phong::find($id);
        $phong->p_ten = $request->p_ten; 
        $phong->p_thongtin = $request->p_thongtin;
        $phong->p_tomtat = $request->p_tomtat;
        $phong->p_slmax = $request->p_slmax;
        $phong->p_slp = $request->p_slp; 
        $phong->p_gia = $request->p_gia;
        
        
        if($request->hasFile('p_img')){
            $file = $request->file('p_img');
            $duoi = $file->getClientOriginalExtension();

            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png'){
                Session::flash('alert-warning', 'Bạn chỉ được chọn file ảnh có đuôi png, jpg, jpeg!!!');
                return redirect()->route('show_addphong');
            }

            $name = $file->getClientOriginalName();
            $file->move("IMG.phong",$name);
            $phong->p_img = $name;

        }else{
            $phong->p_img=""; 
        }

        $phong->save();
        Session::flash('alert-info', 'Sửa thành công!!!');
        return redirect()->route('listsPhong');

    }


    public function getXoa($id){
        $phong=phong::find($id);
        $phong->delete();
        Session::flash('alert-info', 'Xóa thành công!!!');
        return redirect()->route('listsPhong');

    }
}
