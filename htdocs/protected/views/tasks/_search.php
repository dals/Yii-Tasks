<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdOn'); ?>
		<?php echo $form->textField($model,'createdOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedOn'); ?>
		<?php echo $form->textField($model,'updatedOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'targetOn'); ?>
		<?php echo $form->textField($model,'targetOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'repeatConditions'); ?>
		<?php echo $form->textField($model,'repeatConditions',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ownerId'); ?>
		<?php echo $form->textField($model,'ownerId',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assigneeId'); ?>
		<?php echo $form->textField($model,'assigneeId',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assignedGroups'); ?>
		<?php echo $form->textField($model,'assignedGroups',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->