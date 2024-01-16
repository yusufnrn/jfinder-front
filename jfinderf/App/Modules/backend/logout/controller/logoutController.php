<?php
class logoutController extends mainController
{
    public static function logout()
    {
        session_start();
        session_destroy();
        header("Location: /login");
    }

}