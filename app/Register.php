<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
	public $table="register";
    public $fillable = ['name','details'];
}
