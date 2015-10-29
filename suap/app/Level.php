<?php

namespace suap;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $fillable = ['permission'];

    public function user(){
        return $this->belongsTo('Suap\Level','id','level_id');
    }
}
