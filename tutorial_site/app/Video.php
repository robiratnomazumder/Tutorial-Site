<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //protected $table = 'accounts';
	protected $primaryKey = 'videoId';
	public $timestamps = false;
}
