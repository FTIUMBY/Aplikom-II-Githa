<?php
/**
 * Sekolahs (sekolah)
 * @var $this SekolahController
 * @var $data Sekolah
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 06:48 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_sekolah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_sekolah), array('view', 'id'=>$data->kd_sekolah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekolah_name')); ?>:</b>
	<?php echo CHtml::encode($data->sekolah_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekolah_address')); ?>:</b>
	<?php echo CHtml::encode($data->sekolah_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekolah_phone')); ?>:</b>
	<?php echo CHtml::encode($data->sekolah_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_id')); ?>:</b>
	<?php echo CHtml::encode($data->creation_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($data->modified_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_id')); ?>:</b>
	<?php echo CHtml::encode($data->modified_id); ?>
	<br />

	*/ ?>

</div>