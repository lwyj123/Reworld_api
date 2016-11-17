<?php
/**
 * Demo 统一入口
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'init.php';

//装载你的接口
DI()->loader->addDirs('ReworldApi');

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();
$rs = $api->response();
$rs->output();

