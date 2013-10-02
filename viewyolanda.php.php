
<div class="form">

	
	<div class="row">
		<?php echo $form->labelEx($model,'kota'); ?>
		<?php echo $form->textField($model,'kota'); ?>
		<?php echo $form->error($model,'kota'); ?>
	</div>

<div>
 <?php echo $form->labelEx($model,'gender'); ?>
 <?php echo $form->radioButtonList($model,'gender',
            array('S'=>'Situbondo','J'=>'Jember'),array('separator'=>''));
 ?>
 <?php echo $form->error($model,'gender'); ?>
</div>
    </div>