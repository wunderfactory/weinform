<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

	protected $fillable = ['user_id', 'hometown', 'job', 'languages', 'bio'];

    public function picture(){
        return $this->morphOne('Wundership\File', 'owner');
    }
    public function user()
    {
        return $this->belongsTo('Wundership\User');
    }

}
