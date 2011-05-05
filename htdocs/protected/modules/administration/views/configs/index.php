<h1>Configuration files</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'configs',
	'dataProvider'=>$model,
	'columns'=>array(
		array(
			'name' => 'Title',
			'type' => 'raw',
			'value' => 'CHtml::encode($data["title"])'
		),
		array(
			'name' => '',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode("View / Edit"), array("configs/edit", "id"=>base64_encode(basename($data["path"], ".php"))))',
		),
	),
)); ?>