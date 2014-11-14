<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-11 12:34:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_recipe' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-11-11 12:34:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 12:34:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_recipes' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-11-11 12:34:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 12:35:25 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:35:25 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:19 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:19 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:20 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /var/www/happacat/system/classes/Kohana/Arr.php on line 433 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:21 --- DEBUG: #0 /var/www/happacat/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/happac...', 30, Array)
#1 /var/www/happacat/system/classes/Kohana/Arr.php(433): Kohana_Arr::is_assoc(1)
#2 /var/www/happacat/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /var/www/happacat/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /var/www/happacat/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/happacat/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /var/www/happacat/application/classes/Controller/Recipe.php(13): Kohana_ORM::factory('Recipe')
#9 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_list()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#12 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/happacat/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/happacat/system/classes/Kohana/Arr.php:30
2014-11-11 12:36:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-11-11 12:36:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 12:36:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-11-11 12:36:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 12:41:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: recipes_list ~ APPPATH/views/layouts/recipe_list.php [ 2 ] in /var/www/happacat/application/views/layouts/recipe_list.php:2
2014-11-11 12:41:16 --- DEBUG: #0 /var/www/happacat/application/views/layouts/recipe_list.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 2, Array)
#1 /var/www/happacat/system/classes/Kohana/View.php(61): include('/var/www/happac...')
#2 /var/www/happacat/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/happac...', Array)
#3 /var/www/happacat/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/happacat/application/views/template.php(45): Kohana_View->__toString()
#5 /var/www/happacat/system/classes/Kohana/View.php(61): include('/var/www/happac...')
#6 /var/www/happacat/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/happac...', Array)
#7 /var/www/happacat/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/happacat/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#11 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/happacat/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/happacat/application/views/layouts/recipe_list.php:2
2014-11-11 12:43:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/views/menu.php [ 15 ] in /var/www/happacat/application/views/menu.php:15
2014-11-11 12:43:24 --- DEBUG: #0 /var/www/happacat/application/views/menu.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 15, Array)
#1 /var/www/happacat/system/classes/Kohana/View.php(61): include('/var/www/happac...')
#2 /var/www/happacat/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/happac...', Array)
#3 /var/www/happacat/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/happacat/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/happacat/application/classes/Controller/Menu.php(8): Kohana_Response->body(Object(View))
#6 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Menu->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Menu))
#9 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/happacat/application/classes/Controller/Template/Lekkacattpl.php(43): Kohana_Request->execute()
#12 /var/www/happacat/system/classes/Kohana/Controller.php(69): Controller_Template_Lekkacattpl->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#15 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/happacat/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/happacat/application/views/menu.php:15
2014-11-11 13:10:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Recipe.php [ 29 ] in /var/www/happacat/application/classes/Controller/Recipe.php:29
2014-11-11 13:10:49 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 29, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:29
2014-11-11 13:12:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Recipe::_render_image() ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:12:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:07 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:09 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in file:line
2014-11-11 13:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:14:18 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Image - assumed 'Image' ~ APPPATH/classes/Controller/Recipe.php [ 38 ] in /var/www/happacat/application/classes/Controller/Recipe.php:38
2014-11-11 13:14:18 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(38): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/happac...', 38, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:38
2014-11-11 13:14:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::_render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:15:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::_render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:15:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:16:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::_render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Image_GD::render_image() ~ APPPATH/classes/Controller/Recipe.php [ 39 ] in file:line
2014-11-11 13:17:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:17:18 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:18 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:43 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:44 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Installed GD does not support /var/www/happacat/assets/img/no-picture.png images ~ MODPATH/image/classes/Kohana/Image/GD.php [ 636 ] in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:17:45 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image/GD.php(576): Kohana_Image_GD->_save_function('/var/www/happac...', 200)
#1 /var/www/happacat/modules/image/classes/Kohana/Image.php(664): Kohana_Image_GD->_do_render('/var/www/happac...', 200)
#2 /var/www/happacat/application/classes/Controller/Recipe.php(39): Kohana_Image->render('/var/www/happac...', 200, 200)
#3 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#6 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/happacat/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/happacat/modules/image/classes/Kohana/Image/GD.php:576
2014-11-11 13:18:03 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Image::factory(), called in /var/www/happacat/application/classes/Controller/Recipe.php on line 38 and defined ~ MODPATH/image/classes/Kohana/Image.php [ 43 ] in /var/www/happacat/modules/image/classes/Kohana/Image.php:43
2014-11-11 13:18:03 --- DEBUG: #0 /var/www/happacat/modules/image/classes/Kohana/Image.php(43): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/happac...', 43, Array)
#1 /var/www/happacat/application/classes/Controller/Recipe.php(38): Kohana_Image::factory()
#2 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#5 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/happacat/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/happacat/modules/image/classes/Kohana/Image.php:43
2014-11-11 13:23:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/Controller/Recipe.php [ 41 ] in file:line
2014-11-11 13:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 13:26:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:25 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:25 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:28 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:28 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:29 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:29 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:29 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:30 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:30 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rendered ~ APPPATH/classes/Controller/Recipe.php [ 36 ] in /var/www/happacat/application/classes/Controller/Recipe.php:36
2014-11-11 13:26:32 --- DEBUG: #0 /var/www/happacat/application/classes/Controller/Recipe.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/happac...', 36, Array)
#1 /var/www/happacat/system/classes/Kohana/Controller.php(84): Controller_Recipe->action_smallpic()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/happacat/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Recipe))
#4 /var/www/happacat/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/happacat/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/happacat/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/happacat/application/classes/Controller/Recipe.php:36