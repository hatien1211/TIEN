<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\comment;
use App\phong;
use Session;
use DB;
class CommentController extends Controller
{
    public function postComment($id, Request $request){
    	
    	$comment = new comment();
    	$phong = phong::find($id);
 		$comment->users_id = Auth::user()->users_id;
 		$comment->p_id = $id;
    	$comment->cmt_text = $request->cmt_text;
    	
       
    	$comment->save();
    	return redirect()->route('chitietphong',['id'=>$id]);
    }


    

}