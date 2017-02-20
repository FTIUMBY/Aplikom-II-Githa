<?php
/**
 * Tahun Ajars (tahun-ajar)
 * @var $this TahunajarController
 * @var $data TahunAjar
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 20 February 2017, 23:18 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajar_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tahun_ajar_id), array('view', 'id'=>$data->tahun_ajar_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajar')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_ajar); ?>
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