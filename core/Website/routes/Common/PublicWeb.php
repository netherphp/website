<?php

namespace Routes\Common;
use \Nether;
use \Routes;

class PublicWeb {

	public $Get;
	public $Post;
	public $Surface;
	public $Name = 'home';

	public function __construct() {

		$this->Get = new Nether\Input\Filter($_GET);
		$this->Post = new Nether\Input\Filter($_POST);
		$this->Surface = Nether\Stash::Get('surface');
		Nether\Stash::Set('web:route',$this);

		return;
	}

}
