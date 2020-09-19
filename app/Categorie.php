<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name', 'detail'
    ];


    public function SubCategories(){
      
     return $this->hasMany(SubCategorie::class);


     
    }
}
