<?php

class App
{
    protected static $currentPath;
    protected static $currentMethod;
    protected static $routes = [];
    public static $home;
    public static $apiKey;

    public function __construct($config)
    {
        self::$currentMethod = $_SERVER['REQUEST_METHOD'];
        self::$currentPath = $_SERVER['REQUEST_URI'];
        self::$home = $config['home'];
        self::$apiKey = $config['apiKey'];
        self::startRoute();
    }

    public static function getAction($link,$path,$auth=false,$area=null){
        self::$routes[] = [
            'GET',
            $link,
            $path,
            $auth,
            $area
        ];
    }

    public static function postAction($link,$path,$auth=false,$area=null){
        self::$routes[] = [
            'POST',
            $link,
            $path,
            $auth,
            $area
        ];
    }

    public function startRoute(){
        foreach (self::$routes as $route) {
            list($method, $link, $path, $auth, $area) = $route;

            $methodCheck = self::$currentMethod == $method;
            $pathCheck = preg_match('@^' . $link . '$@', self::$currentPath, $params);



            if ($methodCheck && $pathCheck) {
                $uri = explode('/', $path);
                array_shift($uri);
                @list($activeModule, $activeMethod) = $uri;

                if(self::$currentPath === '/' || self::$currentPath==''){
                    $controller = self::$home['module'].'Controller';
                    $method = self::$home['method'];
                    $module = self::$home['module'];
                    $area = self::$home['area'];
                } else {

                    $controller = $activeModule.'Controller';
                    $method = $activeMethod;
                    $module = $activeModule;
                }

                $file=DIRECTORY."/Modules/{$area}/{$module}/controller/{$controller}.php";

                if(file_exists($file)) {
                    require_once $file;
                    if (class_exists($controller)) {
                        $class = new $controller(self::$apiKey);
                        if (method_exists($class, $method)) {
                            array_shift($params);
                            return call_user_func_array([$class,$method],array_values($params));
                        } else {
                            echo "Method Not Found";
                        }
                    } else {
                        echo "Class Not Found";
                    }
                } else {
                    echo "Controller Not Found";
                }
            }
        }
        echo"404 - No such a page";
    }

}