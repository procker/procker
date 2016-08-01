<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteboardGroup extends Model
{

	public function noteboard()
	{
		return $this->belongsTo('App\Noteboard');
    }
}
