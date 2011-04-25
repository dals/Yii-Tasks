<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tasks-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdOn'); ?>
		<?php echo $form->textField($model,'createdOn', array('value'=>date('Y-m-d H:i:s'), 'readonly'=>'readonly')); ?>
		<?php echo $form->error($model,'createdOn'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'updatedOn'); ?>
		<?php echo $form->textField($model,'updatedOn', array('readonly'=>'readonly')); ?>
		<?php echo $form->error($model,'updatedOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'targetOn'); ?>
		<?php echo $form->textField($model,'targetOn', array('id'=>'date-target-on')); ?>
		<?php echo $form->error($model,'targetOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repeatConditions'); ?>
		<?php echo $form->textField($model,'repeatConditions',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'repeatConditions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ownerId'); ?>
		<?php 
                    if($model->getIsNewRecord()) {
                        echo $form->hiddenField($model,'ownerId',array('value'=>Yii::app()->user->id));
                        echo CHtml::textField('', Yii::app()->user->name, array('readonly'=>'readonly')); 
                    } else {
                        echo $form->hiddenField($model,'ownerId');
                        echo CHtml::textField('', $model->owner->username, array('readonly'=>'readonly')); 
                    }
                ?>
		<?php echo $form->error($model,'ownerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigneeId'); ?>
		<?php echo $form->dropDownList($model,'assigneeId', CHtml::listData(Users::model()->findAll(), 'id', 'username')); ?>
		<?php echo $form->error($model,'assigneeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assignedGroups'); ?>
		<?php echo $form->textField($model,'assignedGroups',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'assignedGroups'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->