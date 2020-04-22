<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Sem3External extends Authenticatable
{
    use Notifiable;

	protected $guard = 'student';

	protected $fillable = [
		'ext1', 'ext1mark', 'ext2', 'ext2mark', 'ext3', 'ext3mark', 'ext4', 'ext4mark', 'ext5', 'ext5mark', 'total', 'outOf', 'remark', 
    ];
	
	public function student(){
        return $this->belongsTo('App\Student');
    }

}