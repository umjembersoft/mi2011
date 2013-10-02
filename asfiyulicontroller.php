<?php

class ProfilController extends Controller
{
	public function actionIndex()
	{
		
	}
	
	public function actionPegawai(){
		$model = new Pegawai;
		$this->render('viewasfiyuli', array(
			'model'=>$model
		));	
	}

	
} ?>
