<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    public $table = 'services';

    protected $fillable = [
        'image',
        'description',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(adminCategory::class);
    }
    //
}