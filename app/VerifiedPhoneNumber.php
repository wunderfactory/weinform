<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VerifiedPhoneNumber extends Model {

    use SoftDeletes;

    protected  $fillable = ['phone_number', 'user_id', 'country', 'country_prefix'];

    protected  $hidden = ['verify_token'];

    protected $dates = ['deleted_at'];

    public static function boot()
    {

    }

    public function user ()
    {
        return $this->belongsTo('App\User');
    }

    public function getNumberAttribute()
    {
        return "+".$this->country_prefix.$this->phone_number;
    }
}
