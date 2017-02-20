<?php
/**
 * Sekolahs (sekolah)
 * @var $this SekolahController
 * @var $model Sekolah
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 06:48 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Sekolahs'=>array('manage'),
		$model->kd_sekolah,
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
			'name'=>'kd_sekolah',
			'value'=>$model->kd_sekolah,
			//'value'=>$model->kd_sekolah != '' ? $model->kd_sekolah : '-',
		),
		array(
			'name'=>'status',
			'value'=>$model->status == '1' ? Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
			//'value'=>$model->status,
		),
		array(
			'name'=>'sekolah_name',
			'value'=>$model->sekolah_name,
			//'value'=>$model->sekolah_name != '' ? $model->sekolah_name : '-',
		),
		array(
			'name'=>'sekolah_address',
			'value'=>$model->sekolah_address != '' ? $model->sekolah_address : '-',
			//'value'=>$model->sekolah_address != '' ? CHtml::link($model->sekolah_address, Yii::app()->request->baseUrl.'/public/visit/'.$model->sekolah_address, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'sekolah_phone',
			'value'=>$model->sekolah_phone,
			//'value'=>$model->sekolah_phone != '' ? $model->sekolah_phone : '-',
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
