<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'seller_name', 'price', 'image','seller_id','category_id','quantity'
    ];

    public function seller ()
    {
        return $this->belongsTo('App\'Seller');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
