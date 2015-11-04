<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $table = 'enterprises';

    protected $fillable = 'name','description','mision','vision','file_id';

    public function logo(){
    	return $this->hasOne('suap\File');
    }
}
