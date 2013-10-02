<div class="form">


	
	<div class="row">
		<?php echo $form->labelEx($model,'mata kuliah'); ?>
		<?php echo $form->textField($model,'mata kuliah'); ?>
		<?php echo $form->error($model,'mata kuliah'); ?>
	</div>
<div>
 <?php echo $form->labelEx($model,'gender'); ?>
 <?php echo $form->radioButtonList($model,'gender',
            array('M'=>'Mangga','J'=>'Jeruk'),array('separator'=>''));
 ?>
 <?php echo $form->error($model,'gender'); ?>
</div>
</div>