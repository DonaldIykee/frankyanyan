<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';

    protected $fillable = [
        'image',
        'title',
        'description',
        'category_id'
    ];


    public function category()
    {
        return $this->belongsTo(adminCategory::class);
    }
    //
}