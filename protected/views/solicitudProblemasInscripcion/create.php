<?php
$this->breadcrumbs=array(
	'Solicitud Problemas Inscripcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SolicitudProblemasInscripcion', 'url'=>array('index')),
	array('label'=>'Manage SolicitudProblemasInscripcion', 'url'=>array('admin')),
);
?>

<h1>Create SolicitudProblemasInscripcion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>