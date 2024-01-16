<?php

namespace model;
use mainModel;

class loginModel extends mainModel
{
    public static function session($postArray)
    {
        return self::$Api->loginByApi($postArray);
    }

}