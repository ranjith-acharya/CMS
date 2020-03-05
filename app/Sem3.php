<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sem3 extends Model
{
    protected $fillable = [
		'extSub1', 'extSubMark1', 'intSubMark1', 'extSub2', 'extSubMark2', 'intSubMark2', 'extSub3', 'extSubMark3', 'intSubMark3', 'extSub4', 'extSubMark4', 'intSubMark4', 'extSub5', 'extSubMark5', 'intSubMark5', 'extSub6', 'extSubMark6', 'intSubMark6', 
	];
	public function student(){
		return $this->belongsTo('App\Student');
	}
}
