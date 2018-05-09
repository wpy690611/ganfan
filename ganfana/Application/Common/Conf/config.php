<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql',     // 数据库类型
    'DB_HOST' => '47.98.60.7', // 服务器地址
    // 'DB_HOST' => '127.0.0.1', // 本地服务器地址
    'DB_NAME' => 'ganfan',    // 数据库名
    'DB_USER' => 'root',      // 用户名
    'DB_PWD' => '17621538699',        // 密码
    // 'DB_PWD' => 'root',        // 本地数据库密码
    'DB_PORT' => '3306',  // 端口
    'DB_PREFIX' => 'gf_',   // 数据库表前

    //自定义路径常量
    'TMPL_PARSE_STRING' => array(
        '__ADMIN__' => '/Public/Admin/',
        '__HOME__' => '/Public/Home/',
        '__COMMON__' => '/Public/Common/'
    ),
    // // //404显示页面设置
    // 'TMPL_EXCEPTION_FILE'   =>  './404.html',// 异常页面的模板文件
    // 'ERROR_PAGE'            =>  './404.html', // 错误定向页面

    //自定义success和error的提示页面模板
    'TMPL_ACTION_SUCCESS'=>'Public:dispatch_jump',
    'TMPL_ACTION_ERROR'=>'Public:dispatch_jump',

);