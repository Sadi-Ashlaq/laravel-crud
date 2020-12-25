<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

    //giv access to fill the columnn in database.

    protected $fillable=["fullname","password","email","phone","Address","NID","image"];

}
