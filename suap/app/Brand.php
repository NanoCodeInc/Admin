<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['name','file_id'];

    public function logo(){
    	return $this->hasOne('suap\File');
    }
}
