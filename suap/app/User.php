<?php

namespace suap;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;
<<<<<<< HEAD
=======

>>>>>>> b6f536da86df9048f9169e208d68ea7161392c35
use Suap\File;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['name','lastname', 'email','level_id','file_id', 'password'];

    protected $hidden = ['password', 'remember_token'];


    public function file(){
        return $this->hasOne('Suap\File','id','file_id');
    }

    public function level(){
        return $this->hasOne('Suap\Level','id','level_id');
    }


    public function setPasswordAttribute($password){
        if(!empty($password)){
            $this->attributes['password'] = bcrypt($password);
        }
    }
    
    
}
