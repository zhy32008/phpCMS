<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 16/9/19
 * Time: 下午9:14
 */

define('APP_PATH','./Application/');
define('APP_NAME','CMS');
define('APP_DEBUG',true);

define('BIND_MODULE','Home');// 绑定Home模块到当前入口文件
define('BIND_CONTROLLER','Index');// 绑定Index控制器到当前入口文件
$_GET['m'] = 'Home';
$_GET['c'] = 'Index';


require ('./ThinkPHP/ThinkPHP.php');
