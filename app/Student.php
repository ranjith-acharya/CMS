<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

	protected $guard = 'student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admissionNo', 'firstName', 'lastName', 'email', 'password', 'gender', 'birth', 'contact1', 'contact2', 'address', 'branch', 'stream', 'year', 'avatar',
    ];

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
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function sem6Internal(){
        return $this->hasOne('App\Sem6Internal');
    }
	public function sem6External(){
        return $this->hasOne('App\Sem6External');
    }
}
