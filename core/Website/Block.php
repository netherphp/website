<?php

namespace Website;
use \Nether;
use \Website;

class Block {

	protected $Area;

	////////////////////////
	////////////////////////

	public function
	__Construct() {
		$this->Surface = Nether\Stash::Get('surface');
		$this->Init();
		return;
	}

	public function
	__ToString() {
		return $this->Render();
	}

	////////////////////////
	////////////////////////

	public function
	Init() {

		return;
	}

	public function
	Render() {
		Nether\Ki::Queue('surface-render-scope',function(&$scope){
			$scope['block'] = $this;
		});
		
		return $this->Surface->Area($this->Area,true);
	}

	////////////////////////
	////////////////////////

	protected $ClassList = [];

	public function
	AddClass($item) {
		$this->ClassList[] = $item;
		return $this;
	}

	public function
	GetClassList() {
		return $this->ClassList;
	}

	public function
	GetClassString() {
		return implode(' ',$this->ClassList);
	}

	public function
	SetClassList(array $list) {
		$this->ClassList = $list;
		return $this;
	}

	////////////////////////
	////////////////////////

}
