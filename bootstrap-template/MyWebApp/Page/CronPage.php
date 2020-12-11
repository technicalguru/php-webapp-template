<?php

namespace MyWebApp\Page;

class CronPage extends \WebApp\Page {

	public function __construct($app) {
		parent::__construct($app);
	}

	public function getTitle() {
		return 'Maintenance';
	}

	public function getMain() {
		$rc = array();

		if (isset($this->app->mailQueue)) {
			$rc[] = '<h2>Mail Queue</h2>';
			$mailResult = $this->app->mailQueue->processQueue();
			$rc[] = '<pre>'.json_encode($mailResult, JSON_PRETTY_PRINT).'</pre>';
		}

		return $rc;
	}

}

