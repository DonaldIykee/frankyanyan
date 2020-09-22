<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminProduct extends Model
{
    public $table = 'products';

    protected $fillable = [
        'category_id',
        'product_name',
        'img',
        'product_description',
        'slug',
    ];
    //


    public function category()
    {
        return $this->belongsTo(adminCategory::class);
    }
}