<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model{
    protected $table = 'news';
    protected $fillable = ['title','description','state','img','created_by','user_id'];
    //protected $hidden = ['id'];
}
