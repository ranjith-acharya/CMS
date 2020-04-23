<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Sem6Internal extends Authenticatable
{
    use Notifiable;

	protected $guard = 'student';

	protected $fillable = [
		'int1', 'int1mark', 'int2', 'int2mark', 'int3', 'int3mark', 'int4', 'int4mark', 'int5', 'int5mark', 'int6', 'int6mark', 'int7', 'int7mark', 'int8', 'int8mark', 'total', 'outOf', 'remark',
    ];
	
	public function student(){
        return $this->belongsTo('App\Student');
    }

}