<?php
/**
 * Pendidikans (pendidikan)
 * @var $this PendidikanController
 * @var $model Pendidikan
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'pendidikan-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<?php //begin.Messages ?>
<div id="ajax-message">
	<?php echo $form->errorSummary($model); ?>
</div>
<?php //begin.Messages ?>

<fieldset>

	<div class="clearfix publish">
		<?php echo $form->labelEx($model,'status'); ?>
		<div class="desc">
			<?php echo $form->checkBox($model,'status'); ?>
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->error($model,'status'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'pegawai_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'pegawai_id'); ?>
			<?php echo $form->error($model,'pegawai_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sd_nama'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sd_nama',array('size'=>11,'maxlength'=>11)); ?>
			<?php echo $form->error($model,'sd_nama'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sd_tahun_mulai'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sd_tahun_mulai'); ?>
			<?php echo $form->error($model,'sd_tahun_mulai'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sd_tahun_akhir'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sd_tahun_akhir'); ?>
			<?php echo $form->error($model,'sd_tahun_akhir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'smp_nama'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'smp_nama',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'smp_nama'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'smp_tahun_mulai'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'smp_tahun_mulai'); ?>
			<?php echo $form->error($model,'smp_tahun_mulai'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'smp_tahun_akhir'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'smp_tahun_akhir'); ?>
			<?php echo $form->error($model,'smp_tahun_akhir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sma_nama'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sma_nama',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'sma_nama'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sma_tahun_mulai'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sma_tahun_mulai'); ?>
			<?php echo $form->error($model,'sma_tahun_mulai'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sma_tahun_akhir'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sma_tahun_akhir'); ?>
			<?php echo $form->error($model,'sma_tahun_akhir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sma_jurusan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sma_jurusan',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'sma_jurusan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sj_nama'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sj_nama',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'sj_nama'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sj_tahun_mulai'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sj_tahun_mulai'); ?>
			<?php echo $form->error($model,'sj_tahun_mulai'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sj_tahun_akhir'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sj_tahun_akhir'); ?>
			<?php echo $form->error($model,'sj_tahun_akhir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sj_jurusan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sj_jurusan',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'sj_jurusan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'pc_nama'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'pc_nama',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'pc_nama'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'pc_tahun_mulai'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'pc_tahun_mulai'); ?>
			<?php echo $form->error($model,'pc_tahun_mulai'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'pc_tahun_akhir'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'pc_tahun_akhir'); ?>
			<?php echo $form->error($model,'pc_tahun_akhir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'pc_jurusan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'pc_jurusan',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'pc_jurusan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'dk_nama'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'dk_nama',array('size'=>11,'maxlength'=>11)); ?>
			<?php echo $form->error($model,'dk_nama'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'dk_tahun_mulai'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'dk_tahun_mulai'); ?>
			<?php echo $form->error($model,'dk_tahun_mulai'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'dk_tahun_akhir'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'dk_tahun_akhir'); ?>
			<?php echo $form->error($model,'dk_tahun_akhir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'dk_jurusan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'dk_jurusan',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'dk_jurusan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="submit clearfix">
		<label>&nbsp;</label>
		<div class="desc">
			<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save'), array('onclick' => 'setEnableSave()')); ?>
		</div>
	</div>

</fieldset>
<?php /*
<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
</div>
*/?>
<?php $this->endWidget(); ?>


