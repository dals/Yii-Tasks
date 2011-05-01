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
		<?php echo $form->dropDownList($model,'status',  EConfigLoader::load('statuses')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'targetOn'); ?>
		<?php echo $form->textField($model,'targetOn', array('class'=>'datetime-input')); ?>
		<?php echo $form->error($model,'targetOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repeatConditions'); ?>
		<?php echo $form->textField($model,'repeatConditions',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'repeatConditions'); ?>
	</div>
        <?php
            if(!$model->isNewRecord):
        ?>
            <div class="row">
                    <?php echo $form->labelEx($model,'ownerId'); ?>
                    <?php echo $form->textField($model,'ownerId',array('size'=>11,'maxlength'=>11)); ?>
                    <?php echo $form->error($model,'ownerId'); ?>
            </div>
        <?php 
            else:
                echo $form->hiddenField($model,'ownerId');
            endif;
        ?>
	
        <div class="row">
		<?php echo $form->labelEx($model,'assigneeId'); ?>
		<?php echo $form->dropDownList($model,'assigneeId',  CHtml::listData(Users::model()->findAll(), 'id', 'username')); ?>
		<?php echo $form->error($model,'assigneeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assignedGroups'); ?>
		<?php echo $form->textField($model,'assignedGroups',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'assignedGroups'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contextId'); ?>
		<?php echo $form->dropDownList($model,'contextId',CHtml::listData(Contexts::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'contextId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blockedBy'); ?>
		<?php 
                    if(!$model->isNewRecord) {
                        echo $form->dropDownList($model,'blockedBy', CHtml::listData(Tasks::model()->findAll('id <> :id', array(':id'=>$model->id)), 'id', 'subject')); 
                    } else {
                        echo $form->dropDownList($model,'blockedBy', CHtml::listData(Tasks::model()->findAll(), 'id', 'subject')); 
                    }
                ?>
		<?php echo $form->error($model,'blockedBy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->