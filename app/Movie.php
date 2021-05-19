<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // If you want to block all fields from being mass-assign you can do this:
    protected $guarded = []; 
    // Altrimenti si può usare il fillable che invece specifica quali campi possono essere "mass-assign"
}
