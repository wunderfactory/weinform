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
    protected $appSession;
    private $facebookUser;
    protected $params = array(
        'scope' => 'read_stream, email, user_hometown, user_birthday, user_friends'
    );

    function __construct($loginURL, $app = null, $appSecret = null)
    {
        session_start();
        if (!$app || !$appSecret ) {
            extract(Config::get('facebook'));
            FacebookSession::setDefaultApplication($appId, $secret);
        } else {
            FacebookSession::setDefaultApplication($app, $appSecret);
        }
        $this->loginHelper = new FacebookRedirectLoginHelper($loginURL);
    }

    public function getLoginURL ()
    {
        return $this->loginHelper->getLoginUrl($this->params);
    }

    public function getSessionFromRedirect()
    {
        $this->session = $this->loginHelper->getSessionFromRedirect();
        if ($this->session && $this->session->validate()){
            return $this->session;
        }
        return false;
    }

    public function getAppSession()
    {
        if ($this->appSession) {
            return $this->appSession;
        }
        return $this->appSession =  FacebookSession::newAppSession();;
    }

    public function getUserProfile()
    {
        try {
            $user_profile = (new FacebookRequest(
                $this->session, 'GET', '/me'
            ))->execute()->getGraphObject(GraphUser::className());
            return $user_profile;
        } catch(FacebookRequestException $e) {
            return false;
        }
    }

    public function foundFacebookUser()
    {
            $user_profile = $this->getUserProfile();
            if($this->facebookUser = FacebookUser::find($user_profile->getId())) {
               return $this->facebookUser;
            } else {
                $this->facebookUser = $this->createFacebookUser($user_profile);
                return $this->facebookUser;
            }
    }

    public function createFacebookUser($profile)
    {
        $fbuser = new FacebookUser();
        $fbuser->save();
        $fbuser->id = $profile->getId();
        $fbuser->save();
        return $fbuser;
    }

    public function createInput()
    {
        $input = $this->getUserProfile()->asArray();
        if(array_has($input, "birthday"))
        {
            $split = explode('/', $input['birthday']);
            $input['birth_date'] = $split[1].'.'.$split[0].'.'.$split[2];
        }
        if (array_has($input, 'name')) {
            $input['name'] = strtolower(str_replace(' ','', $input['name']));
        }
        return $input;
    }

    public function getFacebookUser()
    {
        return $this->facebookUser;
    }

    public  function facebookUserData()
    {
        $request = new FacebookRequest(
            $this->getAppSession(),
            'GET',
            '/802180336532686/permissions'
        );
        $response = $request->execute();
        dd($response);
        $graphObject = $response->getGraphObject();
        return $graphObject;
    }
}