<?php
$this->breadcrumbs=array(
	'Solicitud Baja Semestres'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SolicitudBajaSemestre', 'url'=>array('index')),
	array('label'=>'Create SolicitudBajaSemestre', 'url'=>array('create')),
	array('label'=>'Update SolicitudBajaSemestre', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SolicitudBajaSemestre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SolicitudBajaSemestre', 'url'=>array('admin')),
);
?>

<h1>View SolicitudBajaSemestre #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fechahora',
		'status',
		'periodo',
		'anio',
		'domicilio',
		'motivo',
		'telefono',
		'extranjero',
		'matriculaalumno',
	),
)); ?>
