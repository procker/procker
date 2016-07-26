<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','description'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function taskGroups()
	{
		return $this->hasMany('App\TaskGroups');
	}
}
