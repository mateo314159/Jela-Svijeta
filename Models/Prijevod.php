<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JeloPrijevod extends Model
{
    protected $fillable = ['jelo_id', 'jezik_id', 'naziv', 'opis'];

    public function jezik()
    {
        return $this->belongsTo(Jezik::class);
    }

    public function jelo()
    {
        return $this->belongsTo(Jelo::class);
    }
}
