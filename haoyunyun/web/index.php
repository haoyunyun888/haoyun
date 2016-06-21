<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
/*
$act = url_get('act');
if($act != '')
{
    //载入函数库
   // require(ROOT_PATH.'./common/include/function.php');
    include "common/include/function.php";
    if(function_exists($act))
    {
        return call_user_func($act);
    }
    else if(file_exists(ROOT_PATH.'./common/'.$act.'.php'))
    {
        require(ROOT_PATH.'./common/'.$act.'.php');
    }
}
else
{
    require(ROOT_PATH.'./common/install.php');
}
*/