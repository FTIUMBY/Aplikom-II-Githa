<?php
/**
 * Pekerjaans (pekerjaan)
 * @var $this PekerjaanController
 * @var $model Pekerjaan
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Pekerjaans'=>array('manage'),
		'Publish',
	);
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'pekerjaan-form',
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
