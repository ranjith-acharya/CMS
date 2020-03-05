<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
		'firstName', 'fatherName', 'motherName', 'lastName', 'email', 'password', 'address', 'contact1', 'contact2', 'birth', 'age', 'gender', 'subject', 'branch', 'avatar',
	];
	
	protected $hidden = [
        'password', 'remember_token',
    ];
}
