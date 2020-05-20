<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\phong;
use App\chitietdondat;
use App\comment;
use App\dichvu;
use App\dondat;
use App\slide;
use App\users;
use App\anhlienquan;
use DB;
use Validator;
use Session;

class PagesController extends Controller
{
    function __construct(){
        $phong = phong::all();
        $dichvu = dichvu::all();
        $users = users::all();
        $slide = slide::all();
        $dondat = dondat::all();
        $chitietdondat = chitietdondat::all();
        $comment = comment::all();
        $anhlienquan = anhlienquan::all();
        view()->share('phong',$phong);
        view()->share('dichvu',$dichvu);
        view()->share('users',$users);
        view()->share('slide',$slide);
        view()->share('dondat',$dondat);
        view()->share('chitietdondat',$chitietdondat);
        view()->share('comment',$comment);
        view()->share('anhlienquan',$anhlienquan);
        
    }
    public function header(){
        return view('frontend.pages.trangchu');
    }
    public function dichvu(){
        return view('frontend.pages.dichvu');
    }
    public function detailphong($id){
        $phong = phong::find($id);
        //$anhlienquan = anhlienquan::where('p_id',$id);
       $img = DB::table('phong')
            ->leftJoin('anhlienquan', 'phong.p_id', '=', 'anhlienquan.p_id')
            ->where('phong.p_id',$id)
            ->select('anhlienquan.imglq_img')
            ->get();
        //return $phong;
        return view('frontend.pages.phong')->with('p1',$phong)
                                        ->with('anh',$img);
    //return $img;
    }


    public function datphong(){
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
}