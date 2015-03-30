<?php namespace App\Services;


use App\VerifiedEmail;
use Carbon\Carbon;

class Email {

    public function verifyEmail($token) {
        if($token) {
            $email = VerifiedEmail::where('verify_token', $token)->first();
            if ($email && Carbon::now() <= $email->expires_at) {
                $email->verified_at = Carbon::now();
                $email->verified = true;
                $email->save();
                return $email;
            }
        }
        return false;
    }
}