<?php

class ProfilController extends Controller
{
	public function actionIndex()
	{

	}

	public function actionKaryawan(){
		$model = new Karyawan;
		$this->render('viewWardatul Husnia', array(
			'model'=>$model
		));	
	}


}?>