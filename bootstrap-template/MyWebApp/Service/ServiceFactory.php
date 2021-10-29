<?php

namespace MyWebApp\Service;

class ServiceFactory extends \WebApp\Service\ServiceFactory {

	public function __construct($app) {
		parent::__construct($app);
	}

	protected function create($name) {
		switch ($name) {
			// case 'myfunc':     return new MyFuncService($this->app);
		}
		return NULL;
	}
}
