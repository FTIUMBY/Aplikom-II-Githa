<?php
/**
 * Pegawais (pegawai)
 * @var $this PegawaiController
 * @var $model Pegawai
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Pegawais'=>array('manage'),
		'Publish',
	);
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'pegawai-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<div class="dialog-content">
		<?php echo $model->status == 1 ? Yii::t('phrase', 'Are you sure you want to unpublish this item?') : Yii::t('phrase', 'Are you sure you want to publish this item?')?>
	</div>
	<div class="dialog-submit">
		<?php echo CHtml::submitButton($title, array('onclick' => 'setEnableSave()')); ?>
		<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
	</div>
	
<?php $this->endWidget(); ?>
