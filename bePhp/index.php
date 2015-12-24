<?php
/**
 * index.php入口文件
 *
 * @author by wq
 */

//框架根路径
define('SYSTEM_PATH', dirname(__FILE__));

//自动注册，包含类所在的文件
require ROOT_PATH.'/libs/AutoLoader.php';
spl_autoload_register(array('Libs\AutoLoader','load'));

Boot\Init::getInstance()->start(); 
