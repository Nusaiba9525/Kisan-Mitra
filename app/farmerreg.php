<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmerreg extends Model
{
    protected $table = 'FarmerRegistration';
    public $timestamps = false;
    protected $fillable = ['FarmerId','Name','Place','Address','Contact','Email','Password'];
}
