<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table= 'comment';
    protected $primaryKey ='cmt_id';



    protected $fillable = [
        'users_id',
        'cmt_text'
    ];

    protected $guarded      = ['cmt_id'];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public function user(){
    	return $this->belongsTo('App\users','users_id','users_id');
}
