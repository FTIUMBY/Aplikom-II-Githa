<?php
/**
 * Pendidikans (pendidikan)
 * @var $this PendidikanController
 * @var $data Pendidikan
 * version: 0.0.1
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pendidikan_id), array('view', 'id'=>$data->pendidikan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_id')); ?>:</b>
	<?php echo CHtml::encode($data->pegawai_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sd_nama')); ?>:</b>
	<?php echo CHtml::encode($data->sd_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sd_tahun_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->sd_tahun_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sd_tahun_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->sd_tahun_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smp_nama')); ?>:</b>
	<?php echo CHtml::encode($data->smp_nama); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('smp_tahun_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->smp_tahun_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smp_tahun_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->smp_tahun_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sma_nama')); ?>:</b>
	<?php echo CHtml::encode($data->sma_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sma_tahun_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->sma_tahun_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sma_tahun_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->sma_tahun_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sma_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->sma_jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sj_nama')); ?>:</b>
	<?php echo CHtml::encode($data->sj_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sj_tahun_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->sj_tahun_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sj_tahun_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->sj_tahun_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sj_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->sj_jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_nama')); ?>:</b>
	<?php echo CHtml::encode($data->pc_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_tahun_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->pc_tahun_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_tahun_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->pc_tahun_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->pc_jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dk_nama')); ?>:</b>
	<?php echo CHtml::encode($data->dk_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dk_tahun_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->dk_tahun_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dk_tahun_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->dk_tahun_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dk_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->dk_jurusan); ?>
	<br />

	*/ ?>

</div>