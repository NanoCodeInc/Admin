<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    protected $fillable = ['path'];
    
    public function user(){
    	return $this->belongsTo('Suap\User','id','file_id');
    }

    public function brand(){
    	return $this->belongsTo('suap\Brand');
    }

    public function client(){
    	return $this->belongsTo('suap\Client');
    }

    public function enterprise(){
    	return $this->belongsTo('suap\Enterprise');
    }

    public function service(){
    	return $this->belongsTo('suap\Service');
    }
}
