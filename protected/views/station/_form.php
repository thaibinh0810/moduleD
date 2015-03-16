<?php
/* @var $this StationController */
/* @var $model Station */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'station-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position_station'); ?>
		<?php echo $form->textField($model,'position_station',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'position_station'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'line_id'); ?>
		<?php echo $form->textField($model,'line_id'); ?>
		<?php echo $form->error($model,'line_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->