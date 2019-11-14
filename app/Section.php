<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

	public function sports() {
        return $this->hasMany('App\Sport');
	}
	
}
