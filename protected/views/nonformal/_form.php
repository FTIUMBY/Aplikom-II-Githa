<?php
/**
 * Nonformals (nonformal)
 * @var $this NonformalController
 * @var $model Nonformal
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'nonformal-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<div class="dialog-content">
<fieldset>

	<?php //begin.Messages ?>
	<div id="ajax-message">
		<?php echo $form->errorSummary($model); ?>
	</div>
	<?php //begin.Messages ?>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'pegawai_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'pegawai_id'); ?>
			<?php echo $form->error($model,'pegawai_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'nm_lembaga'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'nm_lembaga',array('maxlength'=>64)); ?>
			<?php echo $form->error($model,'nm_lembaga'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'jurusan_nf'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'jurusan_nf',array('rows'=>6, 'cols'=>50,'class'=>'span-10 smaller')); ?>
			<?php echo $form->error($model,'jurusan_nf'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix publish">
		<?php echo $form->labelEx($model,'status'); ?>
		<div class="desc">
			<?php echo $form->checkBox($model,'status'); ?>
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->error($model,'status'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>


