<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VerifiedPhoneNumber extends Model {

    use SoftDeletes;

    protected  $fillable = ['phone_number', 'user_id', 'country', 'country_prefix'];

    protected  $protected = ['verify_token'];

    protected $dates = ['deleted_at'];

    public static function boot()
    {

    }

    public function user ()
    {
        return $this->belongsTo('App\User');
    }

}
