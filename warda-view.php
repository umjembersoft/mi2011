<div>
 <?php echo $form->labelEx($model,'iddivisi'); ?>
 <?php echo $form->dropDownList($model,'iddivisi',CHtml::listData(Divisi::model()->findAll(),
 'iddivisi', 'nama'),
 array('empty'=>'Please Choose One','onchange'=>'{tes();}')
 );?>
 <?php echo $form->error($model,'iddivisi'); ?>
 </div>