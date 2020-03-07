<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;
	
	protected $guard = 'staff';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'firstName', 'fatherName', 'motherName', 'lastName', 'email', 'password', 'address', 'contact1', 'contact2', 'birth', 'age', 'gender', 'subject', 'branch', 'avatar',
	];
	
	protected function sem3(){
		return $this->hasOne('App\Sem3');
	}

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
