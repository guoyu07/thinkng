<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: luofei614 <weibo.com/luofei614>
// +----------------------------------------------------------------------

/**
 * ThinkPHP SAE应用模式定义文件
 */
return [
    // 命名空间
    'namespace' => [
        'Think'       => LIB_PATH . DS,
        'Behavior'    => LIB_PATH . 'Behavior' . DS,
        'Traits'      => LIB_PATH . 'Traits' . DS,
        APP_NAMESPACE => APP_PATH,
    ],

    // 配置文件
    'config'    => array_merge(include THINK_PATH . '/src/Util/convention' . EXT, [
        /* 数据库设置 */
        'database'         => [
            // 数据库类型
            'type'        => 'mysql',
            'dsn'         => '', //
            // 服务器地址
            'hostname'    => SAE_MYSQL_HOST_M . ',' . SAE_MYSQL_HOST_S,
            // 数据库名
            'database'    => SAE_MYSQL_DB,
            // 用户名
            'username'    => SAE_MYSQL_USER,
            // 密码
            'password'    => SAE_MYSQL_PASS,
            // 端口
            'hostport'    => SAE_MYSQL_PORT,
            // 数据库连接参数
            'params'      => [],
            // 数据库编码默认采用utf8
            'charset'     => 'utf8',
            // 数据库表前缀
            'prefix'      => '',
            // 数据库调试模式
            'debug'       => false,
            // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
            'deploy'      => 1,
            // 数据库读写是否分离 主从式有效
            'rw_separate' => true,
            // 读写分离后 主服务器数量
            'master_num'  => 1,
            // 指定从服务器序号
            'slave_no'    => '',
        ],
        'log'              => [
            'type' => 'Sae',
        ],
        'cache'            => [
            'type'   => 'Sae',
            'path'   => CACHE_PATH,
            'prefix' => '',
            'expire' => 0,
        ],
        'file_upload_type' => 'Sae',
        'compile_type'     => 'Sae',
    ]),

    // 别名定义
    'alias'     => [
        'Think\App'                  => CORE_PATH . 'App' . EXT,
        'Think\Build'                => CORE_PATH . 'Build' . EXT,
        'Think\Cache'                => CORE_PATH . 'Cache' . EXT,
        'Think\Config'               => CORE_PATH . 'Config' . EXT,
        'Think\Controller'           => CORE_PATH . 'Controller' . EXT,
        'Think\Cookie'               => CORE_PATH . 'Cookie' . EXT,
        'Think\Db'                   => CORE_PATH . 'Db' . EXT,
        'Think\Debug'                => CORE_PATH . 'Debug' . EXT,
        'Think\Error'                => CORE_PATH . 'Error' . EXT,
        'Think\Exception'            => CORE_PATH . 'Exception' . EXT,
        'Think\Hook'                 => CORE_PATH . 'Hook' . EXT,
        'Think\Input'                => CORE_PATH . 'Input' . EXT,
        'Think\Lang'                 => CORE_PATH . 'Lang' . EXT,
        'Think\Log'                  => CORE_PATH . 'Log' . EXT,
        'Think\Model'                => CORE_PATH . 'Model' . EXT,
        'Think\Response'             => CORE_PATH . 'Response' . EXT,
        'Think\Route'                => CORE_PATH . 'Route' . EXT,
        'Think\Session'              => CORE_PATH . 'Session' . EXT,
        'Think\Template'             => CORE_PATH . 'Template' . EXT,
        'Think\Url'                  => CORE_PATH . 'Url' . EXT,
        'Think\View'                 => CORE_PATH . 'View' . EXT,
        'Think\Db\Driver'            => CORE_PATH . 'Db' . DS . 'Driver' . EXT,
        'Think\View\Driver\Think'    => CORE_PATH . 'View' . DS . 'Driver' . DS . 'Think' . EXT,
        'Think\Template\Driver\File' => CORE_PATH . 'Template' . DS . 'Driver' . DS . 'File' . EXT,
        'Think\Log\Driver\File'      => CORE_PATH . 'Log' . DS . 'Driver' . DS . 'File' . EXT,
        'Think\Cache\Driver\File'    => CORE_PATH . 'Cache' . DS . 'Driver' . DS . 'File' . EXT,
    ],

];
