<?php

class ProfilController extends Controller
{
	public function actionIndex()
	{
		
	}
	
	public function actionAnggota(){
		$model = new Anggota;
		$this->render('viewhelmi', array(
			'model'=>$model
		));	
	}

	
}