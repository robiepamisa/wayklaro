<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $guarded = [];

    public function replies()
    {
       return $this->belongsTo(Reply::class,'id','comment_id');
    }
    public function user()
    {
       return $this->belongsTo(User::class,'author_id','id');
    }

    public function ticket()
    {
       return $this->belongsTo(Ticket::class,'ticket_id','ticket_id');
    }
}
