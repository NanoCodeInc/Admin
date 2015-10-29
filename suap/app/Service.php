<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['title', 'description','file_id'];

    public function image(){
    	return $this->hasOne('suap\File');
    }
}
