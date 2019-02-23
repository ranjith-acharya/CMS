<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['admission', 'firstname', 'lastname', 'email', 'password', 'address', 'birth', 'contact', 'year', 'branch', 'gender', 'avatar'];
}
