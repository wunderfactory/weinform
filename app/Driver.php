<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model {

    public function user(){
        return $this->belongsTo('Wundership\User');
	}

}
