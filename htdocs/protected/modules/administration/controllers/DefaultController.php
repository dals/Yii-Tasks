<?php

class DefaultController extends AdministrationController
{
	public function actionIndex()
	{
		$this->render('index');
	}
}