<?php

namespace WebApp;

use TgUtils\Date;
use WebApp\Utils;

/*********************************************************
  THIS IS A TEMPLATE! Pick what you need for your app
**********************************************************/
class Application extends \WebApp\Application {

	public function __construct($config) {
		parent::__construct($config);
	}

	protected function initDataModel() {
		parent::initDataModel();
		// $this->dataModel->register('my-events',  new DataModel\MyEventsDAO($this->database));
	}
	
	public function getLoginUri() {
		return Utils::getAppPath('/login.html');
	}

	public function getCssFiles() {
		$rc   = parent::getCssFiles();
		//$rc[] = Utils::getFontBaseUrl(TRUE).'/nunito-local.css';
		//$rc[] = Utils::getCssBaseUrl(TRUE).'/bootstrap-datepicker.min.css';
		$rc[] = Utils::getCssBaseUrl().'/app.css';
		return $rc;
	}

	public function getJavascript() {
		$rc   = parent::getJavascript();
		//$rc[] = '<script src="'.Utils::getJavascriptBaseUrl(TRUE).'/bootstrap-datepicker.js"></script>';
		//$rc[] = '<script src="'.Utils::getJavascriptBaseUrl(TRUE).'/bootstrap-datepicker-locales.min.js"></script>';
		//$rc[] = '<script src="'.Utils::getJavascriptBaseUrl(TRUE).'/bs-custom-file-input.min.js"></script>';
		//$rc[] = '<script>jQuery(document).ready(function () { bsCustomFileInput.init() })</script>';
		return $rc;
	}

	public function getMenu($id = NULL) {
		$rc   = array();
		$principal = $this->getPrincipal();
		if ($principal != NULL) {
			$rc = array();
			if ($this->isAuthorized('role')) {
				//$rc[] = new \WebApp\Component\MenuItem($this, 'admin_page_label', '/admin/index.html');
			}
		} else {
			//$rc[] = new \WebApp\Component\MenuItem($this, 'home_page_label', '/index.html');
		}
		//$rc[] = new \WebApp\Component\MenuItem($this, 'imprint_page_label', '/imprint.html');
		return $rc;
	}

}

