<?php

define('WEB',true);

require(sprintf(
	'%s/conf/start.php',
	dirname(dirname(__FILE__))
));

$router = (new Nether\Avenue\Router)
->AddRoute('{@}//index','Routes\Home::Index')
->AddRoute('{@}//npf','Routes\Npf::Index')
->AddRoute('{@}//npf/([a-z]+)','Routes\Npf::Index')
->AddRoute('{@}//nui','Routes\Nui::Index')
->AddRoute('{@}//nui/([a-z]+)','Routes\Nui::Docs')
->AddRoute('{@}//(@)','Routes\Home::NotFound');

Nether\Stash::Set('web:router',$router);

$router->Run();
