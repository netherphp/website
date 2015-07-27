<?php

namespace Routes;
use \Routes;
use \FSHL;
use \Nether;

class Npf extends Routes\Common\PublicWeb {

	public $Name = 'npf';

	public function Index() {
		$this->Surface->Set('page-title','Nether PHP Framework');
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

			$html = new FSHL\Highlighter(new FSHL\Output\Html);
			$html->setLexer(new FSHL\Lexer\Html);
			$scope['html'] = $html;
		});

		$this->Surface->Set('page-title',sprintf(
			'%s - NPF',
			ucwords(str_replace('-',' ',$section))
		));

		try { $this->Surface->Area("npf/docs/{$section}"); }
		catch(\Exception $e) {
			header('Location: /not-found/');
			exit(0);
		}

		return;
	}

}
