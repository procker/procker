<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noteboard extends Model
{
	protected $fillable = ['name'];

	public function project()
	{
		return $this->belongsTo('App\Project');
    }

	public function noteboardGroups()
	{
		return $this->hasMany('App\NoteboardGroup');
	}
}
