<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-revalidacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechahora'); ?>
		<?php echo $form->textField($model,'fechahora'); ?>
		<?php echo $form->error($model,'fechahora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->textField($model,'periodo',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave_revalidar'); ?>
		<?php echo $form->textField($model,'clave_revalidar',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'clave_revalidar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_revalidar'); ?>
		<?php echo $form->textField($model,'nombre_revalidar',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_revalidar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave_cursada'); ?>
		<?php echo $form->textField($model,'clave_cursada',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'clave_cursada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cursada'); ?>
		<?php echo $form->textField($model,'nombre_cursada',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_cursada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'universidad'); ?>
		<?php echo $form->textField($model,'universidad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'universidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matriculaalumno'); ?>
		<?php echo $form->textField($model,'matriculaalumno',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'matriculaalumno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->