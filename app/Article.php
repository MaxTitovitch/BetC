<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    
    public function country() {
    	return $this->belongsTo('App\Country');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function images() {
        return $this->belongsToMany('App\Image');
    }
}
