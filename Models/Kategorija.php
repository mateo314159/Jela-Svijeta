<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    protected $fillable = ['naziv'];

    public function jela()
    {
        return $this->hasMany(Jelo::class);
    }

    public function prijevodi()
    {
        return $this->hasMany(KategorijaPrijevod::class);
    }
}
