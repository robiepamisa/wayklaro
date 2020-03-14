<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Role';
    protected $guarded = [];
    public $timestamps = false;

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
