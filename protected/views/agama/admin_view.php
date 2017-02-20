<?php
/**
 * Agamas (agama)
 * @var $this AgamaController
 * @var $model Agama
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Agamas'=>array('manage'),
		$model->agama_id,
	);
?>

<div class="dialog-content">
	<?php $this->widget('application.components.system.FDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			array(
				'name'=>'agama_id',
				'value'=>$model->agama_id,
			),
			array(
				'name'=>'agama_code',
				'value'=>$model->agama_code != '' ? $model->agama_code : '-',
			),
			array(
				'name'=>'agama_name',
				'value'=>$model->agama_name != '' ? $model->agama_name : '-',
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
