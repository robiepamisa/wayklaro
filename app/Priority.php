<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
	protected $table = 'priority';
    protected $guarded = [];


    public function tickets()
    {
    	return $this->hasMany(Ticket::class);
    }
}
