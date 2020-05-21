<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use Session;
use App\users;
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
        // $this->validate($request,[
        //     'username' => 'required|min:8',
        //     'password' => 'required|min:8|max:32'
        // ],[
        //     'username.required' => 'Bạn chưa nhập tên người dùng',
        //     'username.min'=>'Tên đăng nhập phải có ít nhất 8 kí tự',
        //     'password.required' => 'Bạn chưa nhập password',
        //     'password.min' => 'Mật khẩu phải có ít nhất 8 kí tự',
        //     'password.max' => 'Mật khẩu chỉ tối đa 32 kí tự'
        // ]);

        $arr = [
            'username'=>'tienhong1211',
            'password'=>'matkhau123',
        ];

        if (Auth::attempt($arr)) {
            return redirect()->route('lists');
        } else {
            Session::flash('alert-info','đăng nhập thất bại');
            return redirect()->route('dangnhap'); 
        }
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }


    public function getsignup(){
        return view('admin.dangki');
    }

    public function postsignup(Request $request){
        Validator::make($request->all(), [
            'username' => 'required|min:8|unique:users',
            'password' => 'required|min:8|max:32',
            'passwordAgain' => 'required|same:password',
            'hoten' => 'required|min:3',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'sdt' => 'required|min:10',
            'cmnd' => 'required|min:9|max:9',
            ],[
            'username.required' => 'Bạn chưa nhập tên người dùng',
            'username.min'=>'Tên đăng nhập phải có ít nhất 8 kí tự',
            'username.unique' => 'Tên đăng nhập đã tồn tại',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Mật khẩu phải có ít nhất 8 kí tự',
            'password.max' => 'Mật khẩu chỉ tối đa 32 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa trùng khớp',
            'hoten.required' => 'Bạn chưa nhập họ tên',
            'hoten.min' => 'Họ tên phải ít nhất 3 kí tự',
            'ngaysinh.required' => 'Bạn chưa nhập vào ngày sinh',
            'gioitinh.required' => 'Bạn chưa nhập vào giới tính',
            'sdt.required' => 'Bạn chưa nhập số điện thoại',
            'sdt.min' => 'Số điện thoại phải ít nhất 10 kí tự',
            'cmnd.required' => 'Bạn chưa nhập số CMND',
            'cmnd.min' => 'Số CMND chỉ được 9 kí tự'
            ])->validate();

        $user = new users();
        $user->username = $request->username; 
        $user->password = bcrypt($request->password);
        $user->hoten = $request->hoten;
        $user->ngaysinh = $request->ngaysinh;
        $user->gioitinh = $request->gioitinh;
        $user->sdt = $request->sdt;
        $user->cmnd = $request->cmnd;
        $user->quyen = 0;
        $user->save();

        Session::flash('alert-info', 'Đăng kí thành công!!!');
        return redirect()->route('index');
    }
}
