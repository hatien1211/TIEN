<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\users;
use Validator;
use Session;


class UsersController extends Controller
{
    public function getDanhSach(){
    	$user = users::all();
    	return view('admin.users.danhsach')->with('user',$user);
    }



    public function getThem(){
    	return view('admin.users.them');
    }


    public function postThem(Request $request){

    	//Bắt các điều kiện nhập vào
    	Validator::make($request->all(), [
            'username' => 'required|min:8|unique:users',
            'password' => 'required|min:8|max:32',
            'passwordAgain' => 'required|same:password',
            'hoten' => 'required|min:3',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'sdt' => 'required|min:10',
            'cmnd' => 'required|min:9|max:9',
            'quyen' => 'required'
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
        $user->quyen = $request->quyen;
        $user->save();

        Session::flash('alert-info', 'Thêm thành công!!!');
        return redirect()->route('show_addusers');
    }


    public function getSua($id){
        $users = users::find($id);
        return view('admin.users.sua')->with('users',$users);
    }


    public function postSua(Request $request, $id){

        Validator::make($request->all(), [
            'hoten' => 'required|min:3',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'sdt' => 'required|min:10',
            'cmnd' => 'required|min:9|max:9',
            'quyen' => 'required'
            ],[
           
            'hoten.required' => 'Bạn chưa nhập họ tên',
            'hoten.min' => 'Họ tên phải ít nhất 3 kí tự',
            'ngaysinh.required' => 'Bạn chưa nhập vào ngày sinh',
            'gioitinh.required' => 'Bạn chưa nhập vào giới tính',
            'sdt.required' => 'Bạn chưa nhập số điện thoại',
            'sdt.min' => 'Số điện thoại phải ít nhất 10 kí tự',
            'cmnd.required' => 'Bạn chưa nhập số CMND',
            'cmnd.min' => 'Số CMND chỉ được 9 kí tự'
            ])->validate();

       
        $users = users::find($id);
        if($request->changepassword == 'on')
        {
            Validator::make($request->all(), [
            'password' => 'required|min:8|max:32',
            'passwordAgain' => 'required|same:password'
            
            ],[
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Mật khẩu phải có ít nhất 8 kí tự',
            'password.max' => 'Mật khẩu chỉ tối đa 32 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa trùng khớp'
            ])->validate();
            $users->password = bcrypt($request->password);
        }
        $users->hoten = $request->hoten;
        $users->ngaysinh = $request->ngaysinh;
        $users->gioitinh = $request->gioitinh;
        $users->sdt = $request->sdt;
        $users->cmnd = $request->cmnd;
        $users->quyen = $request->quyen;
        $users->save();

        Session::flash('alert-info', 'Sửa thành công!!!');
        return redirect()->route('lists');
    }



    public function getXoa($id){
        $users = users::find($id);
        $users->delete();
        Session::flash('alert-danger','Xóa thành công');
        return redirect()->route('lists');
    }





   
}
