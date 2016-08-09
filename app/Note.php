<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

	public function NoteboardGroup(){
		return $this->belongsTo('App\NoteboardGroup');
    }
}
