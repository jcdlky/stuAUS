<?php
$config = [
    'host' => 'localhost',
    'dbname' => 'wangzhan',
    'username' => 'root',
    'password' => 'root',
];

//由于当前文件是被自动加载的,优先于模块中的控制器,方法,所以可以先在这里调用Model类里的一个方法,用来接收连接数据库的配置项
//调用静态方法
//\core\model\Model::getConfig($config);
//调用非静态方法
(new \core\model\Model())->getConfig($config);




?>