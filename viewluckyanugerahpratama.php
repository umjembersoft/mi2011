<div>
 <?php echo $form->labelEx($model,'nim'); ?>
 <?php echo CHtml::activeCheckBoxList( $model,'nim',
CHtml::listData(Mahasiswa::model()->findAll(),'nim','nama'),array('separator'=>'&nbsp;'));
 ?>
 <?php echo $form->error($model,'nim');   ?>
 </div>