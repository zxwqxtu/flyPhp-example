<?php
/**
 * 配置文件
 *
 */
return array(
    'app' => array(
        'blog.fly.zxwqxtu.cc' => 'blog',
        'crm.fly.zxwqxtu.cc' => 'crm',
        'search.fly.zxwqxtu.cc' => 'search',
    ),
    'timezone' => 'Asia/Shanghai',
    'debug' => true,
    'errorLog' => '',
    'charset' => 'UTF-8',
    'indexController' => 'Test',
    'require' => array(
        'config/config.php'
    ),
    'cssHost' => 'http://css.static.zxwqxtu.cc',
    'imageHost' => 'http://image.static.zxwqxtu.cc',
    'jsHost' => 'http://js.static.zxwqxtu.cc',
);
