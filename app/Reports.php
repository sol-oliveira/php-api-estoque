<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use SoftDeletes;

    protected $table = 'reports';

    protected $fillable = [        
        'product_id',
        'category_id',
        'quantity',
        'type',
    ];
}
