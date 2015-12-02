<?php
require_once 'lib/autoload.inc';                                                //SYSTEM Classes
require_once 'demo_basic/autoload.inc';                                         //Project Classes
require_once '/home/web/web/config/get_config.php';

\SYSTEM\system::start(\WEBCRAFT\get_config(dirname(__FILE__)));

echo \SYSTEM\API\api::run('\SYSTEM\API\verify', 'page_demo_basic', array_merge($_POST,$_GET), 1, false, true);
new \SYSTEM\LOG\COUNTER("Page was called sucessfully.");