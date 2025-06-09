<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'ballet',
        'jazz',
        'tap',
        'pointe',
        'acro',
    ];

}
