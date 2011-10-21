<?php
$this->breadcrumbs=array(
	'Solicitud Revalidacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SolicitudRevalidacion', 'url'=>array('index')),
	array('label'=>'Manage SolicitudRevalidacion', 'url'=>array('admin')),
);
?>

<h1>Create SolicitudRevalidacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>