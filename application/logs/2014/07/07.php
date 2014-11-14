<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-07 05:23:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/classes/Controller/Template/Lekkacattpl.php [ 23 ] in file:line
2014-07-07 05:23:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-07 05:25:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/Controller/Template/Lekkacattpl.php [ 23 ] in /var/www/happacat/application/classes/Controller/Template/Lekkacattpl.php:23
2014-07-07 05:25:26 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Template/Lekkacattpl.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 23, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(69): Controller_Template_Lekkacattpl->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Template/Lekkacattpl.php:23