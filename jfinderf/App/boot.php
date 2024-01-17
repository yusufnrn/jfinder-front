<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/Helpers/Helper.php';
require_once __DIR__ . '/System/App.php';
require_once __DIR__ . '/Library/Api.php';
require_once __DIR__ . '/System/mainController.php';
require_once __DIR__ . '/System/mainView.php';
require_once __DIR__ . '/System/mainModel.php';
require_once __DIR__ . '/route.php';

spl_autoload_register(function ($class_name){
    $module = explode('Model', $class_name);
    if (file_exists($inc = DIRECTORY."/Modules/frontend/{$module[0]}/model/{$module[0]}Model.php"))
        require_once $inc;
    if (file_exists($inc = DIRECTORY."/Modules/backend/{$module[0]}/model/{$module[0]}Model.php"))
        require_once $inc;
});
