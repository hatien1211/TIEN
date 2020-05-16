<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondat extends Model
{
    protected $table= 'dondat';
    protected $primaryKey='dd_id';


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $guarded      = ['dd_id'];

    protected $fillable = [
        'username',
        'ngaylap',
        'hoten',
        'tongtien'
    ];

    protected $dates        = ['ngaylap'];
    protected $dateFormat   = 'Y-m-d H:i:s';
     public function users (){
    	return $this->belongsTo('App\users','users_id','users_id'); // agurement 1: model, arg2: foreignkey of dondat\ on user, arg3 is primiryKey on users
    }

    public function chitiethoadon (){
   		return $this->hasMany('App\comment','dd_id','dd_id');
}
