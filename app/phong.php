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
}