<?php
class profileController extends mainController{

    protected static $Api;
    protected static $profileModel;
    public function __construct(){
        self::$profileModel = new profileModel();
        self::$Api = new Api();
    }

    public static function index(){
        $data=[];
        self::callLayout("Backend","main","backend","profile",$data);
    }
}