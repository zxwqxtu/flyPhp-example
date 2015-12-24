<?php
/**
 * Init.php
 *
 * 启动类
 *
 * @category Init
 * @package  Boot
 * @author   wangqiang <960875184@qq.com>
 * @tag      Boot Init 
 * @version  GIT: $Id$
 */
namespace Boot;

use Libs\Common;
use Libs\Single;
use Boot\Route;

/**
 * Boot\Init
 *
 * 启动类
 *
 * @category Init
 * @package  Boot
 * @author   wangqiang <960875184@qq.com>
 */
class Init extends Single
{
    /** @var \Boot\Route 路由器对象 */
    private $_route = null;

    /**
     * 错误日志记录
     *
     * @return void
     */
    protected function logError()
    {
        error_reporting(E_ALL);
        ini_set('log_errors', 'On');
        defined('DEBUG') && ini_set('display_errors', intval(DEBUG));

        if (!empty(Common::getConfig('errorLog'))) {
            $errorLog = Common::getConfig('errorLog');
        } else {
            $errorLog = ROOT_PATH . '/logs/error.log'; 
        }
        return ini_set('error_log', $errorLog);
    }

    /**
     * 启动初始化
     * 加载配置文件
     *
     * @return void
     */    
    protected function init()
    {
        define('DEBUG', Common::getConfig('debug'));

        //log日志
        $this->logError();
        //时区
        date_default_timezone_set(Common::getConfig('timezone'));
        
        $this->_route = Route::getInstance();

        //加载必要的文件
        $requireFiles = Common::getConfig('require'); 
        if (!empty($requireFiles)) {
            foreach ($requireFiles as $v) {
                require_once ROOT_PATH.DIRECTORY_SEPARATOR.$v;
            }
        }
    }
    
    /**
     * 启动程序，查找相应的文件controller，action
     *
     * @return boolean
     */
    public function start()
    {
        $controller = $this->_route->getController();
        $action = $this->_route->getAction();
        $params = $this->_route->getParams();

        $controller = empty($controller) ? Common::getConfig('indexController') : $controller;
        $className = "Controllers\\".ucfirst($controller);
        if (!class_exists($className)) {
            throw new \Exception("controller:{$controller} not exists!");
            return false;
        }

        $ctrl = new $className();

        $action = empty($action) ? $ctrl->getDefaultAction(): $action;
        if (!empty($action) && !method_exists($className, $action)) {
            throw new \Exception("controller:{$controller} action:{$action} not exists!");
            return false;
        }

        call_user_func_array(array($ctrl, 'output'), array($action, $params));

        return true;
    }
}
