<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{

    protected $table = 'produtos';

    protected $fillable = [
        'sku',
        'title',
        'price',
        'description',
    ];
}
