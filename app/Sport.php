<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model {
    
    public function section() {
    	return $this->belongsTo('App\Section');
    }

	public function countries() {
        return $this->hasMany('App\Country');
	}

}
