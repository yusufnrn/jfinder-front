<?php

class loginModel extends mainModel
{
    public static function session($postArray)
    {
        return self::$Api->loginByApi($postArray);
    }

}