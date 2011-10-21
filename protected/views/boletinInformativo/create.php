<?php
$this->breadcrumbs=array(
	'Boletin Informativos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BoletinInformativo', 'url'=>array('index')),
	array('label'=>'Manage BoletinInformativo', 'url'=>array('admin')),
);
?>

<h1>Create BoletinInformativo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>