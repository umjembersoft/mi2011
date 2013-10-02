<div>
 <?php echo $form->labelEx($model,'gender'); ?>
 <?php echo $form->radioButtonList($model,'gender',
            array('L'=>'Laki-Laki','P'=>'Perempuan'),array('separator'=>''));
 ?>
 <?php echo $form->error($model,'gender'); ?>
</div>