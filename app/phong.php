<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phong extends Model
{
   	protected $table= 'phong';
    protected $primaryKey='p_id';

    protected $guarded      = ['p_id'];
 	   
    protected $fillable = [
        'p_ten',
        'p_thongtin',
        'p_tomtat',
        'p_slmax',
        'p_slp',
        'p_gia'
    ];

    public function chitiethoadon (){
   		return $this->hasMany('App\chitiethoadon','p_id','p_id');
    }
    public function anhlienquan (){
        return $this->hasMany('App\anhlienquan','p_id','p_id');// agurement 1: model, arg2: foreignkey of comments on comment, arg3 is primiryKey on users
    }
    public function comment (){
        return $this->hasMany('App\comment','p_id','p_id');// agurement 1: model, arg2: foreignkey of comments on comment, arg3 is primiryKey on users
    }
}