<?php

class mainController
{
    public static function callView($module, $method, $params = [])
    {
        return mainView::frontView($module, $method, $params);
    }

    public static function callLayout($area, $layout, $module, $page, $params = [])
    {
        return mainView::frontLayout($area,$layout,$module,$page,$params);
    }
}