<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechahora')); ?>:</b>
	<?php echo CHtml::encode($data->fechahora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo')); ?>:</b>
	<?php echo CHtml::encode($data->periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave_revalidar')); ?>:</b>
	<?php echo CHtml::encode($data->clave_revalidar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_revalidar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_revalidar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('clave_cursada')); ?>:</b>
	<?php echo CHtml::encode($data->clave_cursada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_cursada')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_cursada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('universidad')); ?>:</b>
	<?php echo CHtml::encode($data->universidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matriculaalumno')); ?>:</b>
	<?php echo CHtml::encode($data->matriculaalumno); ?>
	<br />

	*/ ?>

</div>