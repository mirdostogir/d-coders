<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        
        'name' , 'image' , 'description','price','categorie_id','sub_categorie_id'
    
       ];
///custom property///

  

}
