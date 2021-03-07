<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Products;

class Categories extends Model
{
    use SoftDeletes;
    
    protected $table = 'categories';

    protected $fillable = [ 
        'name',
    ];

    public function products(){
       
        return  $this->hasMany(Products::class, 'category_id', 'id');

    }
}
