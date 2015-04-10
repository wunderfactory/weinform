<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model {

    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function picture()
    {
        return $this->morphOne('App\File', 'owner');
    }
}
