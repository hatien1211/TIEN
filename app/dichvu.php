<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    protected $table= 'dichvu';
    protected $primaryKey = 'dv_id';
    protected $guarded      = ['dv_id'];
    protected $fillable = [
        'dv_ten',
        'dv_thongtin'
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
