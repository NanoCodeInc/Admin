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
    
    public function setFileIdAttribute($file){
        if(!empty($file)){
            $name = Carbon::now()->second.$file->getClientOriginalName();
            $filee = File::create(["path" => $name]);
            $this->attributes['file_id'] = $filee->id;
            \Storage::disk('local')->put($name, \File::get($file));
        }
    }
}
