<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entries-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>80,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>15, 'cols'=>80)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'createdOn'); ?>
		<?php echo $form->hiddenField($model,'createdOn'); ?>
		<?php //echo $form->error($model,'createdOn'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'createdByUser'); ?>
		<?php echo $form->hiddenField($model,'createdByUser',array('size'=>11,'maxlength'=>11)); ?>
		<?php //echo $form->error($model,'createdByUser'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'createdForUser'); ?>
		<?php echo $form->dropDownList($model,'createdForUser',  CHtml::listData(Users::model()->findAll(), 'id', 'username')); ?>
		<?php echo $form->error($model,'createdForUser'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBox($model,'isGroupEntry', array('style'=>'float:left;margin-right:5px;')); ?>
		<?php echo $form->labelEx($model,'isGroupEntry'); ?>
		<?php echo $form->error($model,'isGroupEntry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdForGroup'); ?>
		<?php echo $form->dropDownList($model,'createdForGroup',  CHtml::listData(Groups::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'createdForGroup'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
<!--
$(document).ready(function()	{
	// Add markItUp! to your textarea in one line
	// $('textarea').markItUp( { Settings }, { OptionalExtraSettings } );
	$('textarea').markItUp(mySettings);
	
	// You can add content from anywhere in your page
	// $.markItUp( { Settings } );	
	$('.add').click(function() {
 		$.markItUp( { 	openWith:'<opening tag>',
						closeWith:'<\/closing tag>',
						placeHolder:"New content"
					}
				);
 		return false;
	});
	
	// And you can add/remove markItUp! whenever you want
	// $(textarea).markItUpRemove();
	$('.toggle').click(function() {
		if ($("#markItUp.markItUpEditor").length === 1) {
 			$("#markItUp").markItUpRemove();
			$("span", this).text("get markItUp! back");
		} else {
			$('#markItUp').markItUp(mySettings);
			$("span", this).text("remove markItUp!");
		}
 		return false;
	});
});
-->
</script>