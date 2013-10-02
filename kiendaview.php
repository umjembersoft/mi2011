<div>
 <?php echo $form->labelEx($model,'gender'); ?>
 <?php echo $form->radioButtonList($model,'gender',
            array('L'=>'male','P'=>'female'),array('separator'=>''));
 ?>
 <?php echo $form->error($model,'gender'); ?>
</div>