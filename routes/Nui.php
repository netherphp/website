<?php
	
namespace Routes;
use \Routes;
use \FSHL;
use \Nether;

class Nui extends Routes\Common\PublicWeb {

	public function Index() {
		$this->Surface->Area('nui/index');
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

		$this->Surface->Area("nui/docs/{$section}");	
		return;
	}

}
	