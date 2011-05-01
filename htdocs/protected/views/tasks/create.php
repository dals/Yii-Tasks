<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tasks', 'url'=>array('index')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<h1>Create Tasks</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>