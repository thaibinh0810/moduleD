<?php
/* @var $this StationController */
/* @var $data Station */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_station')); ?>:</b>
	<?php echo CHtml::encode($data->position_station); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('line_id')); ?>:</b>
	<?php echo CHtml::encode($data->line_id); ?>
	<br />


</div>