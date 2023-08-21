<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jezik extends Model
{
    protected $fillable = ['naziv', 'kod'];

    // Zbog kompleksnosti višejezičnosti, ovaj model možda neće imati izravne odnose. 
    // No, korišten je za povezivanje prijevoda.
}
