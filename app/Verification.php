<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model {

    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo('Wundership\User');
    }

    public function picture()
    {
        return $this->morphOne('Wundership\File', 'owner');
    }
}
