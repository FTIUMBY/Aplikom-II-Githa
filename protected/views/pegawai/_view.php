<?php
/**
 * Pegawais (pegawai)
 * @var $this PegawaiController
 * @var $data Pegawai
 * version: 0.0.1
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pegawai_id), array('view', 'id'=>$data->pegawai_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::encode($data->NIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NPSN')); ?>:</b>
	<?php echo CHtml::encode($data->NPSN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIK')); ?>:</b>
	<?php echo CHtml::encode($data->NIK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajar_id')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_ajar_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekolah_id')); ?>:</b>
	<?php echo CHtml::encode($data->sekolah_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_id')); ?>:</b>
	<?php echo CHtml::encode($data->agama_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_saudara')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_saudara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_ke')); ?>:</b>
	<?php echo CHtml::encode($data->anak_ke); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('panggilan')); ?>:</b>
	<?php echo CHtml::encode($data->panggilan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kewarganegaraan_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->kewarganegaraan_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saudara_tiri')); ?>:</b>
	<?php echo CHtml::encode($data->saudara_tiri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saudara_angkat')); ?>:</b>
	<?php echo CHtml::encode($data->saudara_angkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bahasa')); ?>:</b>
	<?php echo CHtml::encode($data->bahasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tinggal_dengan')); ?>:</b>
	<?php echo CHtml::encode($data->tinggal_dengan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jarak')); ?>:</b>
	<?php echo CHtml::encode($data->jarak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transportasi')); ?>:</b>
	<?php echo CHtml::encode($data->transportasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gol_darah')); ?>:</b>
	<?php echo CHtml::encode($data->gol_darah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penyakit')); ?>:</b>
	<?php echo CHtml::encode($data->penyakit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelainan_jasmani')); ?>:</b>
	<?php echo CHtml::encode($data->kelainan_jasmani); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tinggi')); ?>:</b>
	<?php echo CHtml::encode($data->tinggi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berat')); ?>:</b>
	<?php echo CHtml::encode($data->berat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telp')); ?>:</b>
	<?php echo CHtml::encode($data->no_telp); ?>
	<br />

	*/ ?>

</div>