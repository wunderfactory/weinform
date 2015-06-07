<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public function questions()
    {
        return $this->belongsToMany('Wundership\Question');
	}

}
