<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategorie extends Model
{
    protected $fillable = [
        'name', 'detail','categorie_id'
    ];

    public function Categories(){

        return $this->belongsTo(Categorie::class,'categorie_id');
    }
}
