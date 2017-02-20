<?php
/**
 * Agamas (agama)
 * @var $this AgamaController
 * @var $data Agama
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 20 February 2017, 14:39 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->agama_id), array('view', 'id'=>$data->agama_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_code')); ?>:</b>
	<?php echo CHtml::encode($data->agama_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_name')); ?>:</b>
	<?php echo CHtml::encode($data->agama_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_id')); ?>:</b>
	<?php echo CHtml::encode($data->creation_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($data->modified_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_id')); ?>:</b>
	<?php echo CHtml::encode($data->modified_id); ?>
	<br />


</div>