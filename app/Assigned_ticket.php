<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned_ticket extends Model
{
          protected $table = 'assigned_tickets';
    
    protected $guarded = [];
    public function tickets()
    {
    	return $this->hasMany(Ticket::class);
    }
    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
