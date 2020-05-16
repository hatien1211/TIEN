<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Authenticatable

{

    use Notifiable;
    protected $table = 'users';
    
    protected $primaryKey ='users_id';

    protected $fillable = [
        'username',
        'password',
        'hoten',
        'ngaysinh',
        'gioitinh',
        'sdt',
        'cmnd',
        'quyen'
    ];

    protected $guarded = ['*'];
    const     CREATED_AT    = 'created_at';
    const     UPDATED_AT    = 'updated_at';
    protected $dates        = ['created_at', 'updated_at'];
   //protected $dateFormat   = 'Y-m-d H:i:s';



    public function comment (){
   		return $this->hasMany('App\comment','users_id','users_id');// agurement 1: model, arg2: foreignkey of comments on comment, arg3 is primiryKey on users
    }

  public function dondat (){
      return $this->hasMany('App\dondat','users_id','users_id');
    }  

    public function getAuthPassword()
    {
        return $this->password;
    }
}
