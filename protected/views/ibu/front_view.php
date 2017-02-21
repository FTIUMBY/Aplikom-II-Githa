<?php
/**
 * Ibus (ibu)
 * @var $this IbuController
 * @var $model Ibu
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Ibus'=>array('manage'),
		$model->ibu_id,
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
			'name'=>'ibu_id',
			'value'=>$model->ibu_id,
			//'value'=>$model->ibu_id != '' ? $model->ibu_id : '-',
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
			'name'=>'pekerjaan_id',
			'value'=>$model->pekerjaan_id,
			//'value'=>$model->pekerjaan_id != '' ? $model->pekerjaan_id : '-',
		),
		array(
			'name'=>'agama_id',
			'value'=>$model->agama_id,
			//'value'=>$model->agama_id != '' ? $model->agama_id : '-',
		),
		array(
			'name'=>'nama_ibu',
			'value'=>$model->nama_ibu,
			//'value'=>$model->nama_ibu != '' ? $model->nama_ibu : '-',
		),
		array(
			'name'=>'kewarganegaraan_i',
			'value'=>$model->kewarganegaraan_i,
			//'value'=>$model->kewarganegaraan_i != '' ? $model->kewarganegaraan_i : '-',
		),
		array(
			'name'=>'tingkat_pendidikan_i',
			'value'=>$model->tingkat_pendidikan_i,
			//'value'=>$model->tingkat_pendidikan_i != '' ? $model->tingkat_pendidikan_i : '-',
		),
		array(
			'name'=>'alamat_i',
			'value'=>$model->alamat_i,
			//'value'=>$model->alamat_i != '' ? $model->alamat_i : '-',
		),
		array(
			'name'=>'telepon_i',
			'value'=>$model->telepon_i,
			//'value'=>$model->telepon_i != '' ? $model->telepon_i : '-',
		),
		array(
			'name'=>'penghasilan_i',
			'value'=>$model->penghasilan_i,
			//'value'=>$model->penghasilan_i != '' ? $model->penghasilan_i : '-',
		),
		array(
			'name'=>'ttl_i',
			'value'=>$model->ttl_i,
			//'value'=>$model->ttl_i != '' ? $model->ttl_i : '-',
		),
		array(
			'name'=>'creation_date',
			'value'=>!in_array($model->creation_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00')) ? Utility::dateFormat($model->creation_date, true) : '-',
		),
		array(
			'name'=>'creation_id',
			'value'=>$model->creation_id,
			//'value'=>$model->creation_id != 0 ? $model->creation_id : '-',
		),
		array(
			'name'=>'modified_date',
			'value'=>!in_array($model->modified_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00')) ? Utility::dateFormat($model->modified_date, true) : '-',
		),
		array(
			'name'=>'modified_id',
			'value'=>$model->modified_id,
			//'value'=>$model->modified_id != 0 ? $model->modified_id : '-',
		),
	),
)); ?>

<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
