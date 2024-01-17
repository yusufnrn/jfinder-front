<?php

class indexController extends mainController
{
    public static $indexModel;
    public function __construct()
    {
        self::$indexModel = new indexModel();
    }

    public function index($formsent=null)
    {
        if (@$formsent) {
            $data['formsent'] = $formsent;
        }
        self::callLayout("Frontend", "main", "frontend", "index");
    }

}