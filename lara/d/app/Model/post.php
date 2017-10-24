<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_post';
    public function user(){
        return $this->belongsTo(\App\Model\user::class);
    }
}
