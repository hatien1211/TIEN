<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    protected $table= 'slide';
    protected $primaryKey='slide_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'slide_ten'
    ];

    protected $guarded      = ['slide_id'];
}
