<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class VerifiedEmail extends Model {

    protected  $fillable = ['email', 'user_id'];
    protected  $protected = ['verify_token'];

    public static function boot()
    {
        parent::boot();
        VerifiedEmail::creating(function($email)
        {
            $email->verify_token = str_random(64);
            $email->expires_at = Carbon::now()->addHour();
        });
    }

    public function user () {
        return $this->belongsTo('App\User');
    }

}
