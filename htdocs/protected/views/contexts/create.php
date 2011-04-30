<?php
$this->breadcrumbs=array(
	'Contexts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contexts', 'url'=>array('index')),
	array('label'=>'Manage Contexts', 'url'=>array('admin')),
);
?>

<h1>Create Contexts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>