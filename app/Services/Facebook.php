<?php namespace App\Services;


use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;
use Facebook\FacebookSession;
use Facebook\GraphUser;
use Illuminate\Support\Facades\Config;
use App\FacebookUser;

class Facebook {
    private $loginHelper;
    protected $session;
    private $facebookUser;

    function __construct($redirectURL, $app = null, $appSecret = null)
    {
        session_start();
        if (!$app || !$appSecret ) {
            extract(Config::get('facebook'));
            FacebookSession::setDefaultApplication($appId, $secret);
        } else {
            FacebookSession::setDefaultApplication($app, $appSecret);
        }
        $this->loginHelper = new FacebookRedirectLoginHelper($redirectURL);
    }

    public function getLoginURL () {
        return $this->loginHelper->getLoginUrl();
    }

    public function getSessionFromRedirect() {
        $this->session = $this->loginHelper->getSessionFromRedirect();
        if ($this->session && $this->session->validate()){
            return $this->session;
        }
        return false;
    }

    public function getUserProfile() {
        try {
            $user_profile = (new FacebookRequest(
                $this->session, 'GET', '/me'
            ))->execute()->getGraphObject(GraphUser::className());
            return $user_profile;
        } catch(FacebookRequestException $e) {
            return false;
        }
    }

    public function foundFacebookUser() {
            $user_profile = $this->getUserProfile();
            if($this->facebookUser = FacebookUser::find($user_profile->getId())) {
               return $this->facebookUser;
            } else {
                return $this->facebookUser = $this->createFacebookUser($user_profile);
            }
    }

    public function createFacebookUser($profile) {
        $fbuser = new FacebookUser();
        $fbuser->id = $profile->getId();
        $fbuser->save();
        return $fbuser;
    }

    public function createInput(){
        return $this->getUserProfile()->asArray();
    }
    public function getFacebookUser(){
        return $this->facebookUser;
    }
}