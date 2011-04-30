<?php
$this->breadcrumbs=array(
	'Contexts',
);

$this->menu=array(
	array('label'=>'Create Contexts', 'url'=>array('create')),
	array('label'=>'Manage Contexts', 'url'=>array('admin')),
);
?>

<h1>Contexts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
