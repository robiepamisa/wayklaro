<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'reply';
    protected $guarded = [];

    public function comments()
    {
    	return $this->hasMany(Comments::class);
    }
}
