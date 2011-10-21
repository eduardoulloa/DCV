<?php
$this->breadcrumbs=array(
	'Solicitud Baja Materias',
);

$this->menu=array(
	array('label'=>'Create SolicitudBajaMateria', 'url'=>array('create')),
	array('label'=>'Manage SolicitudBajaMateria', 'url'=>array('admin')),
);
?>

<h1>Solicitud Baja Materias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
