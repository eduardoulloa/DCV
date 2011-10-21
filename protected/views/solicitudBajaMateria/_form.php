<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-baja-materia-form',
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
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave_materia'); ?>
		<?php echo $form->textField($model,'clave_materia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'clave_materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_materia'); ?>
		<?php echo $form->textField($model,'nombre_materia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidades_materia'); ?>
		<?php echo $form->textField($model,'unidades_materia'); ?>
		<?php echo $form->error($model,'unidades_materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo'); ?>
		<?php echo $form->textField($model,'grupo'); ?>
		<?php echo $form->error($model,'grupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'atributo'); ?>
		<?php echo $form->textField($model,'atributo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'atributo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidades'); ?>
		<?php echo $form->textField($model,'unidades'); ?>
		<?php echo $form->error($model,'unidades'); ?>
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
		<?php echo $form->labelEx($model,'matriculaalumno'); ?>
		<?php echo $form->textField($model,'matriculaalumno',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'matriculaalumno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->