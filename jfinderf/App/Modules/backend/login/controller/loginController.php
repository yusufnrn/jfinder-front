<?php
class loginController extends mainController
{
    protected static $loginModel;

    public function __construct()
    {
        self::$loginModel = new loginModel();

    }

    public static function login()
    {
        $data = [];
        self::callView('backend','login', $data);
    }

    public static function session()
    {
        if (isset($_POST)) {

            $postArray = mHelper\mVariables::mReArray($_POST);

            $postData = [
                'apiUrl' => 'http://portal.localhost/session/login',
                'users_email' => $postArray['users_email'],
                'users_password' => $postArray['users_password'],
            ];

            $userExists = self::$loginModel->session($postData);


            if($userExists['status']==1){
                $_SESSION['info'] = $userExists['data']['session_information'];
            }


            if (isset($_SESSION['info'])) {
                print_r($_SESSION);
                header("Location: /portal");
            } else {
                $data = [$userExists];
                header("Location: /login");
            }
        }
    }
}