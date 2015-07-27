<?php
	
namespace Routes;
use \Routes;
use \FSHL;
use \Nether;

class Nui extends Routes\Common\PublicWeb {
	
	public $Name = 'nui';

	public function Index() {
		$this->Surface->Set('page-title','Nether UI');
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

		$this->Surface->Set('page-title',sprintf(
			'NUI.%s - Nether UI',
			ucwords(str_replace('-',' ',$section))
		));
		
		try { $this->Surface->Area("nui/docs/{$section}"); }
		catch(\Exception $e) {
			$this->Surface->Area('home/not-found');
		}

		return;
	}

}
	