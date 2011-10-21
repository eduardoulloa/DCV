<?php
$this->breadcrumbs=array(
	'Solicitud Carta Recomendacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SolicitudCartaRecomendacion', 'url'=>array('index')),
	array('label'=>'Manage SolicitudCartaRecomendacion', 'url'=>array('admin')),
);
?>

<h1>Create SolicitudCartaRecomendacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>