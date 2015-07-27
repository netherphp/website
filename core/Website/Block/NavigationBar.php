<?php

namespace Website\Block;

use \Packages;
use \Website;

class NavigationBar
extends Website\Block {
	protected $Area = 'block/navigation-bar';
	use Packages\ItemListProperty;

	public function
	Init() {
		$this->SetItemList($this->Surface->Get('page-navigation'));
		return;
	}

	public function
	Render() {

		foreach($this->ItemList as $key => $item) {
			if($key === 0 && !$item->Icon) $item->Icon = 'fa-home';
			elseif(!$item->Icon) $item->Icon = 'fa-angle-right';
		}

		return parent::Render();
	}
}
