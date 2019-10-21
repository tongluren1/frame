<?php

class indexController {

	public function index()
	{
		$smarty = new Smarty();
		$smarty->setTemplateDir(VIEW_PATH);
		$smarty->assign('name', 'joe');
	    $smarty->display("index.tpl");
	}
}

?>