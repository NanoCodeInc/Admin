<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['name','work','description','address','phone','file_id'];


    public function logo(){
    	return $this->hasOne('suap\File');
    }
}
