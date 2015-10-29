<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    public function user(){
    	return $this->belongsTo('suap\User');
    }
}
