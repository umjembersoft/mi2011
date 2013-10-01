<?php

class ProfilController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionDosen(){
		$model = new Dosen;
		$this->render('dosen', array(
			'model'=>$model
		));	
	}

	
}