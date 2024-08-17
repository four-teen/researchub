<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\userModel;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginsController extends BaseController
{
    private $userModel=NULL;
    private $googleClient=NULL;
    function __construct(){
       
        require_once APPPATH . 'libraries/vendor/autoload.php';
        $this->userModel = new UserModel();
        $this->googleClient = new \Google_Client();

        $this->googleClient->setClientId("350993353640-i3r24i13rhcdkm11usp3182d1f4kqsc6.apps.googleusercontent.com");
        $this->googleClient->setClientSecret("gvWwSr-NP73i4pNWoRM56K2E");
        $this->googleClient->setRedirectUri("http://localhost/oracle/administrator");
        $this->googleClient->addScope("email");
        $this->googleClient->addScope("profile");

    }
    public function index(): string
    {
        $data['googleButton'] = '<a href="' . $this->googleClient->createAuthUrl() . '"><img src="public/images/g.gif" alt="Login with Google" width="90px;"></a>';
        $data['googleLoginUrl'] = $this->googleClient->createAuthUrl();
        return view('index', $data);
    }
    public function admin()
    {
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if(!isset($token['error'])){
            $this->googleClient->setAccessToken($token['access_token']);
            session()->set("AccessToken", $token['access_token']);

            $googleService = new \Google_Service_Oauth2($this->googleClient);

            $data = $googleService->userinfo->get();
            echo "<pre>";
            print_r($data);
            die;
            return view('administrator/admin_dashboard');
        }else{
            session()->set("Error", "Something went wrong");
            return redirect()->to(base_url());
        }
        
    }
}
