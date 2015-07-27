<?php

namespace Website;
use \Nether;

class Item {

	public function
	__construct($opt=null) {

		$opt = new Nether\Object($opt,[
			'ID'    => null,
			'Class' => null,
			'Name'  => null,
			'Icon'  => null,
			'Click' => null,
			'URL'   => null
		]);

		foreach($opt as $prop => $val)
		$this->{$prop} = $val;

		return;
	}

}
