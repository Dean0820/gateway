<?php

/**
 * mq配置文件
 */

$commonConfig = require_once dirname(__DIR__, 3) . '/common/config/amqp.php';

$config = [
];

return array_merge($commonConfig, $config);