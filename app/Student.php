<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
		'admissionNo', 'firstName', 'fatherName', 'motherName', 'lastName', 'email', 'password', 'address', 'contact1', 'contact2', 'birth', 'age', 'gender', 'year', 'branch', 'avatar',
	];
	
	protected $hidden = [
        'password', 'remember_token',
    ];
}
