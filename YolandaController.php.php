<?php

class ProfilController extends Controller
{
	public function actionIndex()
	{
		
	}
	
	public function actionNama(){
		$model = new Nama;
		$this->render('viewyolanda', array(
			'model'=>$model
		));	
	}

	
}
