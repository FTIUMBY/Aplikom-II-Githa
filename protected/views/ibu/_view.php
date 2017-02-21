<?php
/**
 * Ibus (ibu)
 * @var $this IbuController
 * @var $data Ibu
 * version: 0.0.1
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ibu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ibu_id), array('view', 'id'=>$data->ibu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_id')); ?>:</b>
	<?php echo CHtml::encode($data->pegawai_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan_id')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_id')); ?>:</b>
	<?php echo CHtml::encode($data->agama_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ibu')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ibu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kewarganegaraan_i')); ?>:</b>
	<?php echo CHtml::encode($data->kewarganegaraan_i); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tingkat_pendidikan_i')); ?>:</b>
	<?php echo CHtml::encode($data->tingkat_pendidikan_i); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_i')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_i); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon_i')); ?>:</b>
	<?php echo CHtml::encode($data->telepon_i); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penghasilan_i')); ?>:</b>
	<?php echo CHtml::encode($data->penghasilan_i); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ttl_i')); ?>:</b>
	<?php echo CHtml::encode($data->ttl_i); ?>
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

	*/ ?>

</div>