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

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority')); ?>:</b>
	<?php echo CHtml::encode($data->priority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdOn')); ?>:</b>
	<?php echo CHtml::encode($data->createdOn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedOn')); ?>:</b>
	<?php echo CHtml::encode($data->updatedOn); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('targetOn')); ?>:</b>
	<?php echo CHtml::encode($data->targetOn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repeatConditions')); ?>:</b>
	<?php echo CHtml::encode($data->repeatConditions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ownerId')); ?>:</b>
	<?php echo CHtml::encode($data->ownerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assigneeId')); ?>:</b>
	<?php echo CHtml::encode($data->assigneeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assignedGroups')); ?>:</b>
	<?php echo CHtml::encode($data->assignedGroups); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contextId')); ?>:</b>
	<?php echo CHtml::encode($data->contextId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blockedBy')); ?>:</b>
	<?php echo CHtml::encode($data->blockedBy); ?>
	<br />

	*/ ?>

</div>