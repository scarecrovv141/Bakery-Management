<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    protected $fillable =[
        'PID', 'name'
    ];
}
