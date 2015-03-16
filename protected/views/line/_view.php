<?php
/* @var $this LineController */
/* @var $data Line */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time_operation')); ?>:</b>
	<?php echo CHtml::encode($data->start_time_operation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time_operation')); ?>:</b>
	<?php echo CHtml::encode($data->end_time_operation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('map')); ?>:</b>
	<?php echo CHtml::encode($data->map); ?>
	<br />


</div>