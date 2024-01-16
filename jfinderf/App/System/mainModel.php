<?php
class mainModel extends Api{
    protected static $Api;
    public function __construct()
    {
        self::$Api = new Api();
    }
}