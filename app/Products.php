<?php

namespace App;

use App\Cart;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class Products extends Model
{
    protected $table = 'Product';
    protected $guarded = [];
    public $timestamps = false;

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
