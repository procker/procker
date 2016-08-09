<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteboardGroup extends Model
{
	protected $fillable = ['name'];

	public function noteboard()
	{
		return $this->belongsTo('App\Noteboard');
    }

	public function notes()
	{
		return $this->hasMany('App\Note');
	}
}
