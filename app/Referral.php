<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $table = 'cart';
    protected $guarded = [];
    public $timestamps = false;

    //

    public function user()
    {
        return $this->hasMany(User::class,'user_id','id');
    }
}
