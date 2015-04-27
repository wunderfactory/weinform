<?php namespace Wundership;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VerifiedEmail extends Model {

    use SoftDeletes;

    protected  $fillable = ['email', 'user_id'];

    protected  $hidden = ['verify_token'];

    protected $dates = ['deleted_at'];

    public static function boot()
    {
        parent::boot();
        VerifiedEmail::creating(function($email)
        {
            $email->verify_token = str_random(64);
            $email->expires_at = Carbon::now()->addHour();
        });
    }

    public function user ()
    {
        return $this->belongsTo('Wundership\User');
    }

}
