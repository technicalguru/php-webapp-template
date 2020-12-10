<?php

namespace MyWebApp\Page;

class IndexPage extends \WebApp\Page {

	public function __construct($app) {
		parent::__construct($app);
	}

	public function getTitle() {
		return 'Hello World!';
	}

	public function getMain() {
		$rc = array();
		$rc[] = new \WebApp\Component\Div($this);
		$rc[0]->addClass('container-fluid');
		new \WebApp\Component\Title($rc[0], 'Hello World!');
		new \WebApp\Component\Paragraph($rc[0], 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.');

		return $rc;
	}


}
