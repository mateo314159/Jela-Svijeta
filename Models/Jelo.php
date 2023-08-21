<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jelo extends Model
{
    protected $fillable = ['naziv', 'opis', 'kategorija_id'];

    public function kategorija()
    {
        return $this->belongsTo(Kategorija::class);
    }

    public function tagovi()
    {
        return $this->belongsToMany(Tag::class, 'jelo_tag'); // pretpostavljamo pivot tablicu 'jelo_tag'
    }

    public function sastojci()
    {
        return $this->hasMany(Sastojak::class);
    }

    public function prijevodi()
    {
        return $this->hasMany(JeloPrijevod::class);
    }
}
