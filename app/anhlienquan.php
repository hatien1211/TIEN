<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anhlienquan extends Model
{
    protected $table= 'anhlienquan';
    protected $primaryKey ='imglq_id';



    protected $fillable = [
        'p_id'
        
    ];

    protected $guarded      = ['imglq_id'];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public function phong(){
    	return $this->belongsTo('App\phong','p_id','p_id');
    }}
