<?php
$this->breadcrumbs=array(
	'Boletin Informativos',
);

$this->menu=array(
	array('label'=>'Create BoletinInformativo', 'url'=>array('create')),
	array('label'=>'Manage BoletinInformativo', 'url'=>array('admin')),
);
?>

<h1>Boletin Informativos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
