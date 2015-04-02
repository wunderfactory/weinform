<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

	protected $fillable = ['user_id', 'hometown', 'job', 'languages', 'bio'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
