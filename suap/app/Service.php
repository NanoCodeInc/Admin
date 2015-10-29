<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    public function image(){
    	return $this->hasOne('suap\File');
    }
}
