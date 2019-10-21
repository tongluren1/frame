<?php

class indexController {

	public function index()
	{
		$testService = new testService();
		echo $testService->test();
	}
}

?>