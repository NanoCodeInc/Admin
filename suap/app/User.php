<?php

namespace suap;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['name','lastname', 'email','level_id','file_id', 'password'];

    protected $hidden = ['password', 'remember_token'];


    public function avatar(){
        return $this->hasOne('suap\File');
    }

    public function level(){
        return $this->hasOne('Suap\Level','id','level_id');
    }


    public function setPasswordAttribute($password){
        if(!empty($password)){
            $this->attributes['password'] = bcrypt($password);
        }
    }
    
    public function setFileIdAttribute($file){
        if(!empty($file)){
            $name = Carbon::now()->second.$file->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($file));
        }
    }
}
