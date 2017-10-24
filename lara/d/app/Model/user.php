<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected  $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function posts(){
        return $this->hasMany(\App\Model\post::class);
    }
}
