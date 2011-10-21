<?php
$this->breadcrumbs=array(
	'Solicitud Revalidacions',
);

$this->menu=array(
	array('label'=>'Create SolicitudRevalidacion', 'url'=>array('create')),
	array('label'=>'Manage SolicitudRevalidacion', 'url'=>array('admin')),
);
?>

<h1>Solicitud Revalidacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
