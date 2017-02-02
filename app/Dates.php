<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dates extends Model{
    protected $table = 'Dates';
    protected $fillable = ['startdate','enddate','place','description','state','DNI','mail','asunt','type'];
    protected $hidden = ['id'];
}
