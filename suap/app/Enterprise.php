<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $table = 'enterprises';

    public function logo(){
    	return $this->hasOne('suap\File');
    }
}
