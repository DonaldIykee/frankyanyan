<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminCategory extends Model
{

    public $table = 'categories';

    protected $fillable = [
        'category_name',
        'image',
    ];
    //

    public function products()
    {
        return $this->hasMany(adminProduct::class);
    }


    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function services()
    {
        return $this->hasMany(services::class);
    }
}