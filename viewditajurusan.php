<div>
 <?php echo $form->labelEx($model,'jurusan'); ?>
 <?php echo $form->radioButtonList($model,'jurusan',
            array('M'=>'Manajemen Informatika','T'=>'Teknik INnformatika'),array('separator'=>''));
 ?>
 <?php echo $form->error($model,'jurusan'); ?>
</div>