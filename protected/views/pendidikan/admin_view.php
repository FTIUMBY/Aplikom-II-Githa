<?php
/**
 * Pendidikans (pendidikan)
 * @var $this PendidikanController
 * @var $model Pendidikan
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Pendidikans'=>array('manage'),
		$model->pendidikan_id,
	);
?>

<?php $this->widget('application.components.system.FDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'pendidikan_id',
			'value'=>$model->pendidikan_id,
			//'value'=>$model->pendidikan_id != '' ? $model->pendidikan_id : '-',
		),
		array(
			'name'=>'status',
			'value'=>$model->status == '1' ? Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
			//'value'=>$model->status,
		),
		array(
			'name'=>'pegawai_id',
			'value'=>$model->pegawai_id,
			//'value'=>$model->pegawai_id != '' ? $model->pegawai_id : '-',
		),
		array(
			'name'=>'sd_nama',
			'value'=>$model->sd_nama,
			//'value'=>$model->sd_nama != '' ? $model->sd_nama : '-',
		),
		array(
			'name'=>'sd_tahun_mulai',
			'value'=>$model->sd_tahun_mulai,
			//'value'=>$model->sd_tahun_mulai != '' ? $model->sd_tahun_mulai : '-',
		),
		array(
			'name'=>'sd_tahun_akhir',
			'value'=>$model->sd_tahun_akhir,
			//'value'=>$model->sd_tahun_akhir != '' ? $model->sd_tahun_akhir : '-',
		),
		array(
			'name'=>'smp_nama',
			'value'=>$model->smp_nama,
			//'value'=>$model->smp_nama != '' ? $model->smp_nama : '-',
		),
		array(
			'name'=>'smp_tahun_mulai',
			'value'=>$model->smp_tahun_mulai,
			//'value'=>$model->smp_tahun_mulai != '' ? $model->smp_tahun_mulai : '-',
		),
		array(
			'name'=>'smp_tahun_akhir',
			'value'=>$model->smp_tahun_akhir,
			//'value'=>$model->smp_tahun_akhir != '' ? $model->smp_tahun_akhir : '-',
		),
		array(
			'name'=>'sma_nama',
			'value'=>$model->sma_nama,
			//'value'=>$model->sma_nama != '' ? $model->sma_nama : '-',
		),
		array(
			'name'=>'sma_tahun_mulai',
			'value'=>$model->sma_tahun_mulai,
			//'value'=>$model->sma_tahun_mulai != '' ? $model->sma_tahun_mulai : '-',
		),
		array(
			'name'=>'sma_tahun_akhir',
			'value'=>$model->sma_tahun_akhir,
			//'value'=>$model->sma_tahun_akhir != '' ? $model->sma_tahun_akhir : '-',
		),
		array(
			'name'=>'sma_jurusan',
			'value'=>$model->sma_jurusan,
			//'value'=>$model->sma_jurusan != '' ? $model->sma_jurusan : '-',
		),
		array(
			'name'=>'sj_nama',
			'value'=>$model->sj_nama,
			//'value'=>$model->sj_nama != '' ? $model->sj_nama : '-',
		),
		array(
			'name'=>'sj_tahun_mulai',
			'value'=>$model->sj_tahun_mulai,
			//'value'=>$model->sj_tahun_mulai != '' ? $model->sj_tahun_mulai : '-',
		),
		array(
			'name'=>'sj_tahun_akhir',
			'value'=>$model->sj_tahun_akhir,
			//'value'=>$model->sj_tahun_akhir != '' ? $model->sj_tahun_akhir : '-',
		),
		array(
			'name'=>'sj_jurusan',
			'value'=>$model->sj_jurusan,
			//'value'=>$model->sj_jurusan != '' ? $model->sj_jurusan : '-',
		),
		array(
			'name'=>'pc_nama',
			'value'=>$model->pc_nama,
			//'value'=>$model->pc_nama != '' ? $model->pc_nama : '-',
		),
		array(
			'name'=>'pc_tahun_mulai',
			'value'=>$model->pc_tahun_mulai,
			//'value'=>$model->pc_tahun_mulai != '' ? $model->pc_tahun_mulai : '-',
		),
		array(
			'name'=>'pc_tahun_akhir',
			'value'=>$model->pc_tahun_akhir,
			//'value'=>$model->pc_tahun_akhir != '' ? $model->pc_tahun_akhir : '-',
		),
		array(
			'name'=>'pc_jurusan',
			'value'=>$model->pc_jurusan,
			//'value'=>$model->pc_jurusan != '' ? $model->pc_jurusan : '-',
		),
		array(
			'name'=>'dk_nama',
			'value'=>$model->dk_nama,
			//'value'=>$model->dk_nama != '' ? $model->dk_nama : '-',
		),
		array(
			'name'=>'dk_tahun_mulai',
			'value'=>$model->dk_tahun_mulai,
			//'value'=>$model->dk_tahun_mulai != '' ? $model->dk_tahun_mulai : '-',
		),
		array(
			'name'=>'dk_tahun_akhir',
			'value'=>$model->dk_tahun_akhir,
			//'value'=>$model->dk_tahun_akhir != '' ? $model->dk_tahun_akhir : '-',
		),
		array(
			'name'=>'dk_jurusan',
			'value'=>$model->dk_jurusan,
			//'value'=>$model->dk_jurusan != '' ? $model->dk_jurusan : '-',
		),
		array(
			'name'=>'creation_date',
			'value'=>!in_array($model->creation_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00')) ? Utility::dateFormat($model->creation_date, true) : '-',
		),
		array(
			'name'=>'creation_id',
			'value'=>$model->creation_id != 0 ? $model->creation->displayname : '-',
		),
		array(
			'name'=>'modified_date',
			'value'=>!in_array($model->modified_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00')) ? Utility::dateFormat($model->modified_date, true) : '-',
		),
		array(
			'name'=>'modified_id',
			'value'=>$model->modified_id != 0 ? $model->modified->displayname : '-',
		),
	),
)); ?>