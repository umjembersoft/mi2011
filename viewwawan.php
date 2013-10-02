<div>
 <?php echo $form->labelEx($model,'gender'); ?>
 <?php echo $form->radioButtonList($model,'gender',
            array('M'=>'Main Bola','T'=>'Touring'),array('separator'=>''));
 ?>
 <?php echo $form->error($model,'gender'); ?>
</div>