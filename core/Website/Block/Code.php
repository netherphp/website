<?php

namespace Website\Block;
use \Nether;
use \Website;

class Code
extends Website\Block {

	protected $Area = 'block/code';

	////////////////////////
	////////////////////////

	protected $File;

	public function
	GetFile() {
		return $this->File;
	}

	public function
	SetFile($f) {
		$this->File = $f;
		return $this;
	}

	////////////////////////
	////////////////////////

	protected $Renderer;

	public function
	GetRenderer() {
		return $this->Renderer;
	}

	public function
	SetRenderer($r) {
		$this->Renderer = $r;
		return $this;
	}

}
