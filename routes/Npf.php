<?php
	
namespace Routes;
use \Routes;
use \FSHL;
use \Nether;

class Npf extends Routes\Common\PublicWeb {
	
	public $Name = 'npf';

	public function Index() {
		$this->Surface->Area('npf/index');
		return;
	}
	
	public function Docs($section) {

		Nether\Ki::Queue('surface-render-scope',function(&$scope){
			$javascript = new FSHL\Highlighter(new FSHL\Output\Html);
			$javascript->setLexer(new FSHL\Lexer\Javascript);
			$scope['javascript'] = $javascript;
			
			$php = new FSHL\Highlighter(new FSHL\Output\Html);
			$php->setLexer(new FSHL\Lexer\Php);
			$scope['php'] = $php;
		});

		$this->Surface->Area("npf/docs/{$section}");	
		return;
	}

}
	