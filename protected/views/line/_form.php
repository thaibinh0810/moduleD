<?php
/* @var $this LineController */
/* @var $model Line */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'line-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_time_operation'); ?>
		<?php echo $form->textField($model,'start_time_operation'); ?>
		<?php echo $form->error($model,'start_time_operation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_time_operation'); ?>
		<?php echo $form->textField($model,'end_time_operation'); ?>
		<?php echo $form->error($model,'end_time_operation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'map'); ?>
		<?php echo $form->textField($model,'map',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'map'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->