<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Task', 'url'=>array('create')),
);

?>

<h1>Manage Tasks</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tasks-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'subject',
//		'body',
		'status',
		'priority',
//		'createdOn',
		
//		'updatedOn',
		'targetOn',
//		'repeatConditions',
//		'ownerId',
//		'assigneeId',
//		'assignedGroups',
		'contextId',
//		'blockedBy',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
