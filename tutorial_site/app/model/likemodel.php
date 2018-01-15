<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class likemodel extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'videoId';
    public $timestamps  = false;
}
