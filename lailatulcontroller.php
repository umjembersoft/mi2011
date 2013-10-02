<?php

class ProfilController extends Controller
{
	public function actionIndex()
	{
		
	}
	
	public function actionNamabuku(){
		$model = new Namabuku;
		$this->render('viewlailatul', array(
			'model'=>$model
		));	
	}

	
}