<div class="form">


	
	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat'); ?>
		<?php echo $form->error($model,'alamat'); ?>
          </div> 
<div>
 <?php echo $form->labelEx($model,'gender'); ?>
 <?php echo $form->radioButtonList($model,'gender',
            array('L'=>'Laki Laki ','P'=>'Perempuan'),array('separator'=>''));
 ?>
 <?php echo $form->error($model,'gender'); ?>
</div>
	</div>