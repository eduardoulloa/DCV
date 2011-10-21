<?php
$this->breadcrumbs=array(
	'Solicitud Baja Semestres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SolicitudBajaSemestre', 'url'=>array('index')),
	array('label'=>'Manage SolicitudBajaSemestre', 'url'=>array('admin')),
);
?>

<h1>Create SolicitudBajaSemestre</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>