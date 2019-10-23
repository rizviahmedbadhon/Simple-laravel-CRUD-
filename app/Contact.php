<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Mass Assignment
    protected $fillable=['name','number','message'];
}
