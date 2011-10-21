<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boletin-informativo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mensaje'); ?>
		<?php echo $form->textField($model,'mensaje',array('size'=>60,'maxlength'=>10000)); ?>
		<?php echo $form->error($model,'mensaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechahora'); ?>
		<?php echo $form->textField($model,'fechahora'); ?>
		<?php echo $form->error($model,'fechahora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre1'); ?>
		<?php echo $form->textField($model,'semestre1'); ?>
		<?php echo $form->error($model,'semestre1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre2'); ?>
		<?php echo $form->textField($model,'semestre2'); ?>
		<?php echo $form->error($model,'semestre2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre3'); ?>
		<?php echo $form->textField($model,'semestre3'); ?>
		<?php echo $form->error($model,'semestre3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre4'); ?>
		<?php echo $form->textField($model,'semestre4'); ?>
		<?php echo $form->error($model,'semestre4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre5'); ?>
		<?php echo $form->textField($model,'semestre5'); ?>
		<?php echo $form->error($model,'semestre5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre6'); ?>
		<?php echo $form->textField($model,'semestre6'); ?>
		<?php echo $form->error($model,'semestre6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre7'); ?>
		<?php echo $form->textField($model,'semestre7'); ?>
		<?php echo $form->error($model,'semestre7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre8'); ?>
		<?php echo $form->textField($model,'semestre8'); ?>
		<?php echo $form->error($model,'semestre8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre9'); ?>
		<?php echo $form->textField($model,'semestre9'); ?>
		<?php echo $form->error($model,'semestre9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exatec'); ?>
		<?php echo $form->textField($model,'exatec'); ?>
		<?php echo $form->error($model,'exatec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcarrera'); ?>
		<?php echo $form->textField($model,'idcarrera'); ?>
		<?php echo $form->error($model,'idcarrera'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->