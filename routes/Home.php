<?php

namespace Routes;
use \Nether;
use \Routes;

class Home extends Routes\Common\PublicWeb {

	public function Index() {
		$this->Surface->Area('home/index');
		return;
	}

	public function NotFound() {
		$this->Surface->Area('home/not-found');
		return;
	}

}
