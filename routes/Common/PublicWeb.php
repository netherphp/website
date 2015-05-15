<?php

namespace Routes\Common;
use \Nether;
use \Routes;

class PublicWeb {

	public $Get;
	public $Post;
	public $Surface;

	public function __construct() {

		$this->Get = new Nether\Input\Filter($_GET);
		$this->Post = new Nether\Input\Filter($_POST);
		$this->Surface = Nether\Stash::Get('surface');

		return;
	}

}
