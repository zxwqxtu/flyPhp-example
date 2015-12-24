<?php
/**
 * AutoLoader.php
 *
 * 类自动加载
 *
 * @category AutoLoader
 * @package  Libs
 * @author   wangqiang <960875184@qq.com>
 * @tag      AutoLoader
 * @version  GIT: $Id$
 */
namespace Libs;

/**
 * AutoLoader
 *
 * 自动加载类
 *
 * @category AutoLoader
 * @package  Libs
 * @author   wangqiang <960875184@qq.com>
 */
class AutoLoader
{
    /**
     * 加载文件
     *
     * @param string $className 类名
     *
     * @return void
     */
    public static function load($className)
    {
        $arr = explode('\\', $className);
        $class = array_pop($arr);

        $config = include SYSTEM_PATH.DIRECTORY_SEPARATOR.'data/config.php';
        $classDirs = empty($config['importClassPath'])? array(): $config['importClassPath'];

        //获取config.php配置导入的目录文件
        foreach ($classDirs as $v) {
            $file = ROOT_PATH.DIRECTORY_SEPARATOR.$v.DIRECTORY_SEPARATOR.$class.".php";
            if (file_exists($file)) {
                return require_once $file;
            }
        }

        //如果没有导入的目录，则按默认规则
        array_walk(
            $arr, 
            function (&$item) {
                $item = lcfirst($item);
            }
        );
        $arr[] = "{$class}.php";
        $file = implode(DIRECTORY_SEPARATOR, $arr);

        return require_once ROOT_PATH.DIRECTORY_SEPARATOR.$file;
    }
}
