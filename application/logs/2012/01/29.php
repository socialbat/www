<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-29 11:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 11:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 11:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 11:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 11:19:55 --- ERROR: Kohana_Exception [ 0 ]: View class does not exist: View_welcome_index ~ MODPATH/kohana-kostache/classes/kohana/kostache.php [ 32 ]
2012-01-29 11:19:55 --- STRACE: Kohana_Exception [ 0 ]: View class does not exist: View_welcome_index ~ MODPATH/kohana-kostache/classes/kohana/kostache.php [ 32 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/controller/welcome.php(6): Kohana_Kostache::factory('welcome/index')
#1 [internal function]: Controller_Welcome->action_index()
#2 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#6 {main}
2012-01-29 11:21:42 --- ERROR: Kohana_Exception [ 0 ]: Template file does not exist: templates/welcome/index ~ MODPATH/kohana-kostache/classes/kohana/kostache.php [ 244 ]
2012-01-29 11:21:42 --- STRACE: Kohana_Exception [ 0 ]: Template file does not exist: templates/welcome/index ~ MODPATH/kohana-kostache/classes/kohana/kostache.php [ 244 ]
--
#0 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(127): Kohana_Kostache->_load('welcome/index')
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(76): Kohana_Kostache->template('welcome/index')
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(37): Kohana_Kostache->__construct(NULL, NULL)
#3 /Users/lucas/Sites/at.socialb.www/application/classes/controller/welcome.php(6): Kohana_Kostache::factory('welcome/index')
#4 [internal function]: Controller_Welcome->action_index()
#5 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#9 {main}
2012-01-29 11:44:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ APPPATH/classes/view/abstract/layout.php [ 9 ]
2012-01-29 11:44:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ APPPATH/classes/view/abstract/layout.php [ 9 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/lucas/Si...', 9, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(37): View_Abstract_Layout->__construct(NULL, NULL)
#2 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(6): Kohana_Kostache::factory('dashboard/index')
#3 [internal function]: Controller_Dashboard->action_index()
#4 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#8 {main}
2012-01-29 11:44:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/view/abstract/layout.php [ 9 ]
2012-01-29 11:44:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/view/abstract/layout.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 11:55:27 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for View_Dashboard_Index::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
2012-01-29 11:55:27 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for View_Dashboard_Index::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/dashboard/index.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/lucas/Si...', 10, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Dashboard_Index->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.metas')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.metas', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.metas', '?        ', '?')
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.metas', '?        ', '?')
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 11:55:28 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for View_Dashboard_Index::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
2012-01-29 11:55:28 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for View_Dashboard_Index::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/dashboard/index.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/lucas/Si...', 10, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Dashboard_Index->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.metas')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.metas', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.metas', '?        ', '?')
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.metas', '?        ', '?')
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 11:56:10 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
2012-01-29 11:56:10 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/lucas/Si...', 15, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Abstract_Layout->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.metas')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.metas', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.metas', '?        ', '?')
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.metas', '?        ', '?')
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 11:56:11 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
2012-01-29 11:56:11 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/lucas/Si...', 15, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Abstract_Layout->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.metas')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.metas', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.metas', '?        ', '?')
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.metas', '?        ', '?')
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 11:57:04 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
2012-01-29 11:57:04 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/lucas/Si...', 15, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Abstract_Layout->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.metas')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.metas', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.metas', '?        ', '?')
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.metas', '?        ', '?')
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 11:57:05 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
2012-01-29 11:57:05 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for View_Abstract_Layout::html(), called in /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php on line 795 and defined ~ APPPATH/classes/view/abstract/layout.php [ 15 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/lucas/Si...', 15, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Abstract_Layout->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.metas')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.metas', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.metas', '?        ', '?')
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.metas', '?        ', '?')
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 12:19:16 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'html' ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
2012-01-29 12:19:16 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'html' ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:19:17 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'html' ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
2012-01-29 12:19:17 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'html' ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:19:17 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'html' ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
2012-01-29 12:19:17 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'html' ~ APPPATH/classes/view/dashboard/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:24:46 --- ERROR: ErrorException [ 2048 ]: Declaration of View_Dashboard_Index::html() should be compatible with that of View_Abstract_Layout::html() ~ APPPATH/classes/view/dashboard/index.php [ 4 ]
2012-01-29 12:24:46 --- STRACE: ErrorException [ 2048 ]: Declaration of View_Dashboard_Index::html() should be compatible with that of View_Abstract_Layout::html() ~ APPPATH/classes/view/dashboard/index.php [ 4 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/dashboard/index.php(4): Kohana_Core::error_handler(2048, 'Declaration of ...', '/Users/lucas/Si...', 4, Array)
#1 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/core.php(496): require('/Users/lucas/Si...')
#2 [internal function]: Kohana_Core::auto_load('View_dashboard_...')
#3 [internal function]: spl_autoload_call('View_dashboard_...')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(30): class_exists('View_dashboard_...')
#5 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(6): Kohana_Kostache::factory('dashboard/index')
#6 [internal function]: Controller_Dashboard->action_index()
#7 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#11 {main}
2012-01-29 12:24:55 --- ERROR: ErrorException [ 2048 ]: Declaration of View_Dashboard_Index::html() should be compatible with that of View_Abstract_Layout::html() ~ APPPATH/classes/view/dashboard/index.php [ 4 ]
2012-01-29 12:24:55 --- STRACE: ErrorException [ 2048 ]: Declaration of View_Dashboard_Index::html() should be compatible with that of View_Abstract_Layout::html() ~ APPPATH/classes/view/dashboard/index.php [ 4 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/dashboard/index.php(4): Kohana_Core::error_handler(2048, 'Declaration of ...', '/Users/lucas/Si...', 4, Array)
#1 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/core.php(496): require('/Users/lucas/Si...')
#2 [internal function]: Kohana_Core::auto_load('View_dashboard_...')
#3 [internal function]: spl_autoload_call('View_dashboard_...')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(30): class_exists('View_dashboard_...')
#5 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(6): Kohana_Kostache::factory('dashboard/index')
#6 [internal function]: Controller_Dashboard->action_index()
#7 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#11 {main}
2012-01-29 12:25:21 --- ERROR: ErrorException [ 2048 ]: Declaration of View_Dashboard_Index::html() should be compatible with that of View_Abstract_Layout::html() ~ APPPATH/classes/view/dashboard/index.php [ 4 ]
2012-01-29 12:25:21 --- STRACE: ErrorException [ 2048 ]: Declaration of View_Dashboard_Index::html() should be compatible with that of View_Abstract_Layout::html() ~ APPPATH/classes/view/dashboard/index.php [ 4 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/dashboard/index.php(4): Kohana_Core::error_handler(2048, 'Declaration of ...', '/Users/lucas/Si...', 4, Array)
#1 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/core.php(496): require('/Users/lucas/Si...')
#2 [internal function]: Kohana_Core::auto_load('View_dashboard_...')
#3 [internal function]: spl_autoload_call('View_dashboard_...')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(30): class_exists('View_dashboard_...')
#5 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(6): Kohana_Kostache::factory('dashboard/index')
#6 [internal function]: Controller_Dashboard->action_index()
#7 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#11 {main}
2012-01-29 12:30:59 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/view/abstract/layout.php [ 18 ]
2012-01-29 12:30:59 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/view/abstract/layout.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:32:12 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/view/abstract/layout.php [ 18 ]
2012-01-29 12:32:12 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/view/abstract/layout.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 12:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 12:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/grid.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 12:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/grid.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 12:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/grid.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 12:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/grid.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 12:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 12:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 12:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/grid.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 12:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/grid.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 12:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 12:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 12:40:45 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/view/abstract/layout.php [ 38 ]
2012-01-29 12:40:45 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/view/abstract/layout.php [ 38 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(38): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/lucas/Si...', 38, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Abstract_Layout->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.title')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.title', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.title', NULL, NULL)
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.title', NULL, NULL)
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 12:41:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/view/abstract/layout.php [ 38 ]
2012-01-29 12:41:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/view/abstract/layout.php [ 38 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(38): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/lucas/Si...', 38, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Abstract_Layout->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.title')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.title', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.title', NULL, NULL)
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.title', NULL, NULL)
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 12:41:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/view/abstract/layout.php [ 38 ]
2012-01-29 12:41:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/view/abstract/layout.php [ 38 ]
--
#0 /Users/lucas/Sites/at.socialb.www/application/classes/view/abstract/layout.php(38): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/lucas/Si...', 38, Array)
#1 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(795): View_Abstract_Layout->html()
#2 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(769): Mustache->_findVariableInContext('html', Array)
#3 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(655): Mustache->_getVariable('html.head.title')
#4 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(622): Mustache->_renderUnescaped('html.head.title', '', '')
#5 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(590): Mustache->_renderEscaped('html.head.title', NULL, NULL)
#6 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(531): Mustache->_renderTag('', 'html.head.title', NULL, NULL)
#7 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(266): Mustache->_renderTags('<!DOCTYPE html>...')
#8 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/vendor/mustache/Mustache.php(192): Mustache->_renderTemplate('<!DOCTYPE html>...', Array)
#9 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache/layout.php(43): Mustache->render()
#10 /Users/lucas/Sites/at.socialb.www/modules/kohana-kostache/classes/kohana/kostache.php(107): Kohana_Kostache_Layout->render()
#11 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/response.php(160): Kohana_Kostache->__toString()
#12 /Users/lucas/Sites/at.socialb.www/application/classes/controller/dashboard.php(7): Kohana_Response->body(Object(View_Dashboard_Index))
#13 [internal function]: Controller_Dashboard->action_index()
#14 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#15 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/lucas/Sites/at.socialb.www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#18 {main}
2012-01-29 12:59:28 --- ERROR: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
2012-01-29 12:59:28 --- STRACE: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:59:29 --- ERROR: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
2012-01-29 12:59:29 --- STRACE: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:59:29 --- ERROR: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
2012-01-29 12:59:29 --- STRACE: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 12:59:30 --- ERROR: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
2012-01-29 12:59:30 --- STRACE: ErrorException [ 1 ]: Call to private method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 13:00:00 --- ERROR: ErrorException [ 1 ]: Call to protected method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
2012-01-29 13:00:00 --- STRACE: ErrorException [ 1 ]: Call to protected method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 13:00:01 --- ERROR: ErrorException [ 1 ]: Call to protected method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
2012-01-29 13:00:01 --- STRACE: ErrorException [ 1 ]: Call to protected method View_Abstract_Layout::html() from context 'Mustache' ~ MODPATH/kohana-kostache/vendor/mustache/Mustache.php [ 795 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 13:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 13:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 14:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 14:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}
2012-01-29 14:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-29 14:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/lucas/Sites/at.socialb.www/index.php(104): Kohana_Request->execute()
#1 {main}