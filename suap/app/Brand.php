<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    public function logo(){
    	return $this->hasOne('suap\File');
    }
}
