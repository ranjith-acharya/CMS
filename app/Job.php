<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Job extends Authenticatable
{
    use Notifiable;

	protected $guard = 'company';

	protected $fillable = [
		'title', 'description', 'stipend', 'minPointer',
    ];

}