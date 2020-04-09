<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Products';
    public $timestamps = false;
    protected $fillable = ['ProductId','Username','Password'];
}
