<?php
/**
 * Pekerjaans (pekerjaan)
 * @var $this PekerjaanController
 * @var $model Pekerjaan
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Pekerjaans'=>array('manage'),
		$model->pekerjaan_id,
	);
?>

<div class="dialog-content">
	<?php $this->widget('application.components.system.FDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			array(
				'name'=>'pekerjaan_id',
				'value'=>$model->pekerjaan_id,
			),
			array(
				'name'=>'status',
				'value'=>$model->status == '1' ? Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
				'type'=>'raw',
			),
			array(
				'name'=>'pekerjaan_code',
				'value'=>$model->pekerjaan_code != '' ? $model->pekerjaan_code : '-',
			),
			array(
				'name'=>'pekerjaan_name',
				'value'=>$model->pekerjaan_name != '' ? $model->pekerjaan_name : '-',
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
</div>
<div class="dialog-submit">
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
