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
		<?php echo $form->label($model,'createdOn'); ?>
		<?php echo $form->textField($model,'createdOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdByUser'); ?>
		<?php echo $form->textField($model,'createdByUser',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdForUser'); ?>
		<?php echo $form->textField($model,'createdForUser',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isGroupEntry'); ?>
		<?php echo $form->textField($model,'isGroupEntry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdForGroup'); ?>
		<?php echo $form->textField($model,'createdForGroup',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->