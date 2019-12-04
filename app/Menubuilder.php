<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menubuilder extends Model
{
    protected $fillable =  ["title","slug","order"];
}
