<?php

/**
 * 数据库配置文件
 */

$commonConfig = require_once dirname(__DIR__, 3) . '/common/config/databases.php';

$config = [
];

return array_merge($commonConfig, $config);