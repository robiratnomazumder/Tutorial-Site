<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	//protected $table = 'bank_users';
	protected $primaryKey = 'userId';
	public $timestamps = false;
}
