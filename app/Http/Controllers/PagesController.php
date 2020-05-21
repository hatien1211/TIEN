<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
use Carbon\Carbon;
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


    public function datphong($id, Request $request){
        // Validator::make($request->all(), [
        //     'checkin' => 'required',
        //     'checkout' => 'required',
        //     'p_slmax' => 'required'
        //     ],[
        //     'checkin.required' => 'Bạn chưa nhập ngày nhận phòng',
        //     'checkout.required'=>'Tên đăng nhập phải có ít nhất 8 kí tự',
        //     'p_slmax.required' => 'Tên đăng nhập đã tồn tại',
            
        //     ])->validate();
        $room = phong::find($id);
        $giohientai = Carbon::now('Asia/Ho_Chi_Minh'); 


        $ctdd = new chitietdondat();
        $dd = new dondat();

        if($giohientai > $ctdd->checkout){
            $room->p_slp = $room->p_slp + 1;
        }

        $room->p_slp =  $room->p_slp - 1;
        $dd->users_id = Auth::user()->users_id;
        $dd->ngaylap = $giohientai; 
        $songay= (strtotime($ctdd->checkout) - strtotime($ctdd->checkin))/(60*60*24);
        $dd->tongtien = $room->p_gia * $songay;
        
        $room->save();
        $dd->save();
        $ctdd->dd_id = $dd->dd_id; 
        $ctdd->p_id = $id;
        $ctdd->checkin = $request->checkin;
        $ctdd->checkout = $request->checkout;
        $ctdd->save();
         Session::flash('alert-info', 'Thêm thành công!!!');
         return redirect()->route('index');
    }
}