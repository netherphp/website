<?php

namespace Website\Block;
use \Nether;
use \Website;

class ContentHeader
extends Website\Block {

	protected $Area = 'block/content-header';

	////////////////////////
	////////////////////////

	public function
	Init() {
		$this
		->AddClass('SplashGraphicHome')
		->SetTitle($this->Surface->Get('page-title'))
		->SetSubtitle($this->Surface->Get('page-subtitle'));

		return;
	}

	////////////////////////
	////////////////////////

	protected $Title;

	public function
	GetTitle() {
		return $this->Title;
	}

	public function
	SetTitle($t) {
		$this->Title = $t;
		return $this;
	}

	////////////////////////
	////////////////////////

	protected $Subtitle;

	public function
	GetSubtitle() {
		return $this->Subtitle;
	}

	public function
	SetSubtitle($t) {
		$this->Subtitle = $t;
		return $this;
	}

}
