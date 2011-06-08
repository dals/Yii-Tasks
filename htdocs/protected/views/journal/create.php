<?php
$this->breadcrumbs=array(
	'Entries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Manage Entries', 'url'=>array('admin')),
);
?>

<h1>Create Entries</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>