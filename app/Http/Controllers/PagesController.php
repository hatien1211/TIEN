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

/** All Paypal Details class **/

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use DB;



use Validator;
use Carbon\Carbon;
class PagesController extends Controller
{

   private $_api_context;

    public function __construct(){

        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

        $phong = phong::all();
        $dichvu = dichvu::all();
        $users = users::all();
        $slide = slide::all();
        $chitietdondat = chitietdondat::all();
       
        $anhlienquan = anhlienquan::all();
        view()->share('phong',$phong);
        view()->share('dichvu',$dichvu);
        view()->share('users',$users);
        view()->share('slide',$slide);
        view()->share('chitietdondat',$chitietdondat);
        view()->share('anhlienquan',$anhlienquan);

       
    }
    public function index(){
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
         //return redirect()->route('dondat'); 
        //return redirect()->route('chitietphong'); 

        ////////////////////////  PAYPAL //////////////////////////

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($dd->tongtien); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($dd->tongtien);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(sprintf('%s%s',URL::to('/admin/status'),'?success=true')) /** Specify return URL **/
            ->setCancelUrl(sprintf('%s%s',URL::to('/admin/status'),'?success=false'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return redirect()->route('chitietphong');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return redirect()->route('chitietphong');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        //Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return redirect()->route('chitietphong');


        ////////////////////////  PAYPAL //////////////////////////      
        
}
    
     public function getPaymentStatus(Request $request)
    {

        $datarray=$request->all();


        if($datarray['success']== 'true'){
            if(empty($datarray['PayerID']) || empty($datarray['token'])){
               Session::put('error', 'URL trả về không thành công');
             return redirect()->route('chitietphong');
            }

            $payment = Payment::get($datarray['paymentId'], $this->_api_context);
             $execution = new PaymentExecution();
             $execution->setPayerId($datarray['PayerID']);
             $result = $payment->execute($execution, $this->_api_context);
             if ($result->getState() == 'approved') {

             \Session::put('success', 'Payment success');
                return redirect()->route('dondat'); 
            }
        }

         \Session::put('error', 'thanh toán thất bại');
         return redirect()->route('chitietphong');

    }
    
        


    public function dondat(){
        $id = Auth::user()->users_id;

        $don = DB::table('dondat')->join("users","users.users_id","=","dondat.users_id")
        ->where('users.users_id',$id)->select("users.username","dondat.*")->get();
        
        return view('frontend.pages.dondat')->with('don',$don);
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