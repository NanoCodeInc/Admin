<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';


    public function logo(){
    	return $this->hasOne('suap\File');
    }
}
