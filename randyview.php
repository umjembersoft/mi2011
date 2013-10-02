<div>
 <?php echo $form->labelEx($model,'nip'); ?>
 <?php echo CHtml::activeCheckBoxList( $model,'nip',
CHtml::listData(Karyawan::model()->findAll(),'nip','nama'),array('separator'=>'&nbsp;'));
 ?>
 <?php echo $form->error($model,'nip');   ?>
 </div>