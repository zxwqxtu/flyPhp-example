<?php
/**
 * Common.php
 *
 * 公共方法类
 *
 * @category Common
 * @package  Libs
 * @author   wangqiang <960875184@qq.com>
 * @tag      AutoLoader
 * @version  GIT: $Id$
 */
namespace Libs;

/**
 * Common
 *
 * 公共方法类
 *
 * @category Common
 * @package  Libs
 * @author   wangqiang <960875184@qq.com>
 */
class Common
{    
    /** @var array 配置数组 */
    private static $_config = null;

    /**
     * 获取config文件值
     *
     * @param string $key  key
     * @param string $item item 
     *
     * @return string|int|array|null
     */
    public static function getConfig($key=null, $item=null)
    {
        if (empty(self::$_config)) {
            self::$_config = include ROOT_PATH.DIRECTORY_SEPARATOR.'data/config.php';
        }

        $config = self::$_config;
        if (empty($key)) {
            return $config;
        }
        if (empty($item)) {
            return isset($config[$key])? $config[$key]: null;
        }

        return isset($config[$key][$item])? $config[$key][$item]: null;
    }
}
