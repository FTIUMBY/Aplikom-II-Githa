<?php
/**
 * Nonformals (nonformal)
 * @var $this NonformalController
 * @var $model Nonformal
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 12:57 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Nonformals'=>array('manage'),
		$model->nonformal_id,
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
			'name'=>'nonformal_id',
			'value'=>$model->nonformal_id,
			//'value'=>$model->nonformal_id != '' ? $model->nonformal_id : '-',
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
			'name'=>'nm_lembaga',
			'value'=>$model->nm_lembaga,
			//'value'=>$model->nm_lembaga != '' ? $model->nm_lembaga : '-',
		),
		array(
			'name'=>'jurusan_nf',
			'value'=>$model->jurusan_nf != '' ? $model->jurusan_nf : '-',
			//'value'=>$model->jurusan_nf != '' ? CHtml::link($model->jurusan_nf, Yii::app()->request->baseUrl.'/public/visit/'.$model->jurusan_nf, array('target' => '_blank')) : '-',
			'type'=>'raw',
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
