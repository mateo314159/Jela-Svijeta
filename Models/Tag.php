<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['naziv'];

    public function jela()
    {
        return $this->belongsToMany(Jelo::class, 'jelo_tag'); // pretpostavljamo pivot tablicu 'jelo_tag'
    }

    public function prijevodi()
    {
        return $this->hasMany(TagPrijevod::class);
    }
}
