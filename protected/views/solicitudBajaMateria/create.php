<?php
$this->breadcrumbs=array(
	'Solicitud Baja Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SolicitudBajaMateria', 'url'=>array('index')),
	array('label'=>'Manage SolicitudBajaMateria', 'url'=>array('admin')),
);
?>

<h1>Create SolicitudBajaMateria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>