<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sastojak extends Model
{
    protected $fillable = ['naziv'];

    public function jelo()
    {
        return $this->belongsTo(Jelo::class);
    }

    public function prijevodi()
    {
        return $this->hasMany(SastojakPrijevod::class);
    }
}
