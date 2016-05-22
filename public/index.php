<?php

use Illuminate\Database\Capsule\Manager as Capsule;
// +----------------------------------------------------------------------
// | LeoFramework [ My PHP framework ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: ev2le0 <@gmail.com>
// +----------------------------------------------------------------------


//框架要求PHP须在5.3以上
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// // Autoload 自动载入
// require '../vendor/autoload.php';

// //Eloquent ORM

// $capsule = new Capsule;

// $capsule->addConnection(require '../config/database.php');

// $capsule->bootEloquent();

//定义PUBLIC_PATH
define('PUBLIC_PATH',__DIR__);
//启动器
require PUBLIC_PATH."/../bootstrap.php";

// 路由配置
require '../config/routes.php';