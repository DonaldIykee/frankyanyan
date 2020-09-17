<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'Contact';

    protected $fillable = [
        'fName',
        'lName',
        'lSender',
        'lPhone',
        'lSubject',
        'lMessage',
    ];
    //
}