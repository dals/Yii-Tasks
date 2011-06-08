<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php echo CHtml::encode($data->body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdOn')); ?>:</b>
	<?php echo CHtml::encode($data->createdOn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdByUser')); ?>:</b>
	<?php echo CHtml::encode($data->createdByUser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdForUser')); ?>:</b>
	<?php echo CHtml::encode($data->createdForUser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isGroupEntry')); ?>:</b>
	<?php echo CHtml::encode($data->isGroupEntry); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('createdForGroup')); ?>:</b>
	<?php echo CHtml::encode($data->createdForGroup); ?>
	<br />

	*/ ?>

</div>