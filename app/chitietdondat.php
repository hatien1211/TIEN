<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdondat extends Model
{
    protected $table= 'chitietdondat';
    protected $primaryKey = ['dd_id', 'p_id'];
    protected $fillable = [
        'dd_id',
        'p_id',
        'checkin',
        'checkout',
        
    ];
    protected $dates        = ['checkin','checkout'];
     protected $guarded      = ['dd_id','p_id'];
    public    $incrementing = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dateFormat   = 'Y-m-d';

      public function dondat(){
    	return $this->belongsTo('App\users','dd_id','dd_id'); 
    }

     public function phong(){
    	return $this->belongsTo('App\users','p_id','p_id'); 
    }
}
