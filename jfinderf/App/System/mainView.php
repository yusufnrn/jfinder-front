<?php

class mainView
{
    public static function frontView($module, $method,$area ,$data = null, $return=false)
    {
        if(!$return){
            $file = DIRECTORY . "/Modules/{$module}/{$method}/view/{$method}View.php";

            if (file_exists($file)) {
                require($file);
            } else {
                echo "404 - Page Not Found";
            }
        } else {
            ob_start();
            $file = DIRECTORY . "/Modules/{$module}/{$method}/view/{$method}View.php";

            if (file_exists($file)) {
                require($file);
                $text = ob_get_contents();
                ob_end_clean();
                return $text;
            } else {
                echo "404 - Page Not Found";
            }
        }

    }

    public static function frontLayout($area, $layout, $module, $method, $data = null)
    {
        $data['VIEW'] = mainView::frontView($module, $method, $area, $data, true);
        $file = DIRECTORY . "/Layout/{$area}/{$layout}Layout.php";
        if (file_exists($file))
            require($file);
        else
            echo "404 - Page Not Found";
    }
}