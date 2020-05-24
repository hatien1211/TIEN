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
       
        $anhlienquan = anhlienquan::all();
        view()->share('phong',$phong);
        view()->share('dichvu',$dichvu);
        view()->share('users',$users);
        view()->share('slide',$slide);
        view()->share('dondat',$dondat);
        view()->share('chitietdondat',$chitietdondat);
        
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
      
       $cmt = DB::table('comment')
            ->leftJoin('phong', 'phong.p_id', '=', 'comment.p_id')
            ->leftJoin('users', 'users.users_id', '=', 'comment.users_id')
            ->where('phong.p_id',$id)

            ->select('comment.*','users.username')
            ->get();

            //return $cmt;
       
        

        //return $cmt1;
        return view('frontend.pages.phong')->with('p1',$phong)
                                            ->with('cmt',$cmt)
                                            
                                        ->with('anh',$img);
    
    }


    public function datphong($id, Request $request){
      
        Validator::make($request->all(), [
            'checkin' => 'required',
            'checkout' => 'required',
            'p_slmax' => 'required'
            ],[
            'checkin.required' => 'Bạn chưa nhập ngày nhận phòng',
            'checkout.required'=>'Tên đăng nhập phải có ít nhất 8 kí tự',
            'p_slmax.required' => 'Tên đăng nhập đã tồn tại',
           // 'checkin.required' > 'checkout.required' => 'Bạn đã chọn sai ngày'
            ])->validate();
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
        $ctdd->checkin = $request->checkin;
        $ctdd->checkout = $request->checkout;
        $songay= (strtotime($ctdd->checkout) - strtotime($ctdd->checkin))/(60*60*24);
        $dd->tongtien = $room->p_gia * $songay;
        $room->save();
        $dd->save();
        $ctdd->dd_id = $dd->dd_id; 
        $ctdd->p_id = $id;

        $ctdd->save();
        //Session::flash('alert-info', 'Thêm thành công!!!');
         return redirect()->route('dondat');

        

        
    }


    public function dondat(){
        return view('frontend.pages.dondat');
    }

    public function chitietdondat($id){
        //$chitiet123 = chitietdondat::where('dd_id', $id)->get();
        $chitiet123 = DB::table('chitietdondat')
            ->leftJoin('dondat', 'dondat.dd_id', '=', 'chitietdondat.dd_id')
            ->leftJoin('phong', 'phong.p_id', '=', 'chitietdondat.p_id')
            ->where('chitietdondat.dd_id',$id)
            ->select('chitietdondat.*','phong.p_ten')
            ->get();
            
        return view('frontend.pages.chitietdondat')
        ->with('chitiet',$chitiet123);
    }

    
}