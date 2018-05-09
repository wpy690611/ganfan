<?php
return array(
    //'配置项'=>'配置值'
    // 文件上传的配置项
    'FILE_UPLOAD' => array(
        'rootPath' => './Uploads/',
        'exts' => array('doc', 'docx'),
        'maxSize' => 31457280,
    ),

    // 数据库配置
    'DB_TYPE' => 'mysql',     // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'qpp_news',          // 数据库名
    'DB_USER' => 'root',      // 用户名
    'DB_PWD' => 'root',          // 密码
    'DB_PORT' => '3306',  // 端口
    'DB_PREFIX' => 'qpp_',   // 数据库表前

    //自定义路径常量
    'TMPL_PARSE_STRING' => array(
        '__ADMIN__' => '/Public/Admin/',
        '__HOME__' => '/Public/Home',
        '__COMMON__' => '/Public/Common'
    ),
);