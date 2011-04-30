<?php
$this->breadcrumbs=array(
	'Contexts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contexts', 'url'=>array('index')),
	array('label'=>'Create Contexts', 'url'=>array('create')),
	array('label'=>'View Contexts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Contexts', 'url'=>array('admin')),
);
?>

<h1>Update Contexts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>