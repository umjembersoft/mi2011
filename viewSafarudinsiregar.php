<div>
<?php echo $from->labelEx($model,'gender');?>
<?php echo $from->radiobuttonList($model,'gender',
	arry('L'=>'male','P'=>'female'),array('separator'=>''));
?>
<?php echo $from->error($model,'gender');?>
</div>