<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contexts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>70,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>80)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBox($model,'isShared', array('style'=>'float:left;margin-right:10px;')); ?>
		<?php echo $form->labelEx($model,'isShared', array('style'=>'padding-top: 2px;')); ?>
		<?php echo $form->error($model,'isShared'); ?>
	</div>

        <div class="row" style="margin-top: 10px;">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->