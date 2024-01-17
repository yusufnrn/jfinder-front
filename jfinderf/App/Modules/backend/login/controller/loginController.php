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
                'apiUrl' => 'http://backend.jfinder/session/login',
                'usersEmail' => $postArray['usersEmail'],
                'usersPassword' => $postArray['usersPassword'],
            ];

            $userExists = self::$loginModel->session($postData);


            if($userExists['status']==1){
                $_SESSION['info'] = $userExists['data']['session_information'];
            }


            if (isset($_SESSION['info'])) {
                print_r($_SESSION);
               // header("Location: /portal");
                echo "Girdin";
            } else {
                $data = [$userExists];
               // header("Location: /login");
                echo "Giremedin";
            }
        }
    }
}