<?php

define('WFW_ROOT_DIR',  __DIR__);
define('WFW_TIMEZONE', 'Europe/Berlin');
include WFW_ROOT_DIR.'/vendor/autoload.php';
// You can also use any other mechanism to detect that you are in debug
// but beware that the application framework is not yet setup
$DEBUG = FALSE;

if (!$DEBUG) {
	ini_set('display_errors', 'Off');
	ini_set('log_errors', 'On');
}

try {
	$service = new \WebApp\Service();
	$service->run();
} catch (\Throwable $e) {
	\TgLog\Log::error('Cannot create application', $e);
	header("HTTP/1.1 500 Internal Error");
	echo '<h1>Internal Error</h1>';
	echo '<p>Cannot create application.</p>';
	if ($DEBUG) {
		echo('<pre>'.\TgUtils\FormatUtils::getTraceAsString($e).'</pre>');
	}
}
