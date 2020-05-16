<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function username()
	{
	    return 'username';
	}
	 public function getdangnhapAdmin(){
        return view('admin.dangnhap');
    }


	 public function postdangnhapAdmin(Request $request){
        $this->validate($request,[
            'username' => 'required|min:8',
            'password' => 'required|min:8|max:32'
        ],[
            'username.required' => 'Bạn chưa nhập tên người dùng',
            'username.min'=>'Tên đăng nhập phải có ít nhất 8 kí tự',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Mật khẩu phải có ít nhất 8 kí tự',
            'password.max' => 'Mật khẩu chỉ tối đa 32 kí tự'
        ]);

        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
        {
            return redirect()->route('lists');
            
        }else{
            Session::flash('alert-info','đăng nhập thất bại');
            return redirect()->route('dangnhap'); 
        }
    }
}
