<?php

/**
 * consul配置文件
 */

$commonConfig = require_once dirname(__DIR__, 3) . '/common/config/consul.php';

$config = [
];

return array_merge($commonConfig, $config);