<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model {

	//
    public function user(){
        return $this->belongsTo('Wundership\User');
    }
}
