<div>
 <?php echo $form->labelEx($model,'nip'); ?>
 <?php echo CHtml::activeCheckBoxList( $model,'nobuku',
CHtml::listData(Perpustakaan::model()->findAll(),'nobuku','namabuku'),array('separator'=>'&nbsp;'));
 ?>
 <?php echo $form->error($model,'nobuku');   ?>
 </div>