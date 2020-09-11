<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teamMember extends Model
{
    public $table = 'team_members';

    protected $fillable = [
        'name',
        'position',
        'image'
    ];
    //
}