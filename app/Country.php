<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    public function sport() {
    	return $this->belongsTo('App\Sport');
    }

	public function articles() {
        return $this->hasMany('App\Article');
	}

}
