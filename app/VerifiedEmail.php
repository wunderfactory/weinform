<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifiedEmail extends Model {

    protected  $fillable = ['email', 'user_id'];
    protected  $protected = ['verify_token'];

    public static function boot()
    {
        parent::boot();
        VerifiedEmail::creating(function($verifiedemail)
        {
            $verifiedemail->verify_token = str_random(64);
        });
    }

    public function user () {
        return $this->belongsTo('App\User');
    }

}
