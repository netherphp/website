<?php

namespace Packages;

trait ItemListProperty {

	protected $ItemList = [];

	public function
	AddItem($item) {
		$this->ItemList[] = $item;
		return $this;
	}

	public function
	GetItemList() {
		return $this->ItemList;
	}

	public function
	SetItemList(array $list) {
		$this->ItemList = $list;
		return $this;
	}

}
