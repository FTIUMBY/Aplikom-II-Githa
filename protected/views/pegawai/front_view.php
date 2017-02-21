<?php
/**
 * Pegawais (pegawai)
 * @var $this PegawaiController
 * @var $model Pegawai
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 14:06 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Pegawais'=>array('manage'),
		$model->pegawai_id,
	);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo Utility::flashSuccess(Yii::app()->user->getFlash('success'));
?>
<?php //end.Messages ?>

<?php $this->widget('application.components.system.FDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'pegawai_id',
			'value'=>$model->pegawai_id,
			//'value'=>$model->pegawai_id != '' ? $model->pegawai_id : '-',
		),
		array(
			'name'=>'NIP',
			'value'=>$model->NIP,
			//'value'=>$model->NIP != '' ? $model->NIP : '-',
		),
		array(
			'name'=>'NPSN',
			'value'=>$model->NPSN,
			//'value'=>$model->NPSN != '' ? $model->NPSN : '-',
		),
		array(
			'name'=>'NIK',
			'value'=>$model->NIK,
			//'value'=>$model->NIK != '' ? $model->NIK : '-',
		),
		array(
			'name'=>'status',
			'value'=>$model->status == '1' ? Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
			//'value'=>$model->status,
		),
		array(
			'name'=>'tahun_ajar_id',
			'value'=>$model->tahun_ajar_id,
			//'value'=>$model->tahun_ajar_id != '' ? $model->tahun_ajar_id : '-',
		),
		array(
			'name'=>'sekolah_id',
			'value'=>$model->sekolah_id,
			//'value'=>$model->sekolah_id != '' ? $model->sekolah_id : '-',
		),
		array(
			'name'=>'agama_id',
			'value'=>$model->agama_id,
			//'value'=>$model->agama_id != '' ? $model->agama_id : '-',
		),
		array(
			'name'=>'nama',
			'value'=>$model->nama,
			//'value'=>$model->nama != '' ? $model->nama : '-',
		),
		array(
			'name'=>'gender',
			'value'=>$model->gender,
			//'value'=>$model->gender != '' ? $model->gender : '-',
		),
		array(
			'name'=>'tempat_lahir',
			'value'=>$model->tempat_lahir,
			//'value'=>$model->tempat_lahir != '' ? $model->tempat_lahir : '-',
		),
		array(
			'name'=>'tgl_lahir',
			'value'=>!in_array($model->tgl_lahir, array('0000-00-00','1970-01-01')) ? Utility::dateFormat($model->tgl_lahir) : '-',
		),
		array(
			'name'=>'alamat',
			'value'=>$model->alamat != '' ? $model->alamat : '-',
			//'value'=>$model->alamat != '' ? CHtml::link($model->alamat, Yii::app()->request->baseUrl.'/public/visit/'.$model->alamat, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'jumlah_saudara',
			'value'=>$model->jumlah_saudara,
			//'value'=>$model->jumlah_saudara != '' ? $model->jumlah_saudara : '-',
		),
		array(
			'name'=>'anak_ke',
			'value'=>$model->anak_ke,
			//'value'=>$model->anak_ke != '' ? $model->anak_ke : '-',
		),
		array(
			'name'=>'tahun_masuk',
			'value'=>$model->tahun_masuk,
			//'value'=>$model->tahun_masuk != '' ? $model->tahun_masuk : '-',
		),
		array(
			'name'=>'gambar',
			'value'=>$model->gambar != '' ? $model->gambar : '-',
			//'value'=>$model->gambar != '' ? CHtml::link($model->gambar, Yii::app()->request->baseUrl.'/public/visit/'.$model->gambar, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'panggilan',
			'value'=>$model->panggilan,
			//'value'=>$model->panggilan != '' ? $model->panggilan : '-',
		),
		array(
			'name'=>'kewarganegaraan_pegawai',
			'value'=>$model->kewarganegaraan_pegawai,
			//'value'=>$model->kewarganegaraan_pegawai != '' ? $model->kewarganegaraan_pegawai : '-',
		),
		array(
			'name'=>'saudara_tiri',
			'value'=>$model->saudara_tiri,
			//'value'=>$model->saudara_tiri != '' ? $model->saudara_tiri : '-',
		),
		array(
			'name'=>'saudara_angkat',
			'value'=>$model->saudara_angkat,
			//'value'=>$model->saudara_angkat != '' ? $model->saudara_angkat : '-',
		),
		array(
			'name'=>'bahasa',
			'value'=>$model->bahasa != '' ? $model->bahasa : '-',
			//'value'=>$model->bahasa != '' ? CHtml::link($model->bahasa, Yii::app()->request->baseUrl.'/public/visit/'.$model->bahasa, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'tinggal_dengan',
			'value'=>$model->tinggal_dengan,
			//'value'=>$model->tinggal_dengan != '' ? $model->tinggal_dengan : '-',
		),
		array(
			'name'=>'jarak',
			'value'=>$model->jarak,
			//'value'=>$model->jarak != '' ? $model->jarak : '-',
		),
		array(
			'name'=>'transportasi',
			'value'=>$model->transportasi,
			//'value'=>$model->transportasi != '' ? $model->transportasi : '-',
		),
		array(
			'name'=>'gol_darah',
			'value'=>$model->gol_darah,
			//'value'=>$model->gol_darah != '' ? $model->gol_darah : '-',
		),
		array(
			'name'=>'penyakit',
			'value'=>$model->penyakit != '' ? $model->penyakit : '-',
			//'value'=>$model->penyakit != '' ? CHtml::link($model->penyakit, Yii::app()->request->baseUrl.'/public/visit/'.$model->penyakit, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'kelainan_jasmani',
			'value'=>$model->kelainan_jasmani != '' ? $model->kelainan_jasmani : '-',
			//'value'=>$model->kelainan_jasmani != '' ? CHtml::link($model->kelainan_jasmani, Yii::app()->request->baseUrl.'/public/visit/'.$model->kelainan_jasmani, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'tinggi',
			'value'=>$model->tinggi,
			//'value'=>$model->tinggi != '' ? $model->tinggi : '-',
		),
		array(
			'name'=>'berat',
			'value'=>$model->berat,
			//'value'=>$model->berat != '' ? $model->berat : '-',
		),
		array(
			'name'=>'no_telp',
			'value'=>$model->no_telp,
			//'value'=>$model->no_telp != '' ? $model->no_telp : '-',
		),
	),
)); ?>

<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
