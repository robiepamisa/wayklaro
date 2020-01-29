<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryList extends Model
{

    protected $table = 'CategoryList';
    public $timestamps = false;
    protected $guarded = [];


    public function ticket()
    {
        return $this->belongsTo(Ticket::class,'tic_id','ticket_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','category_id');
    }

    
}
