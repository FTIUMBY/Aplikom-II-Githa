<?php
/**
 * Ibus (ibu)
 * @var $this IbuController
 * @var $model Ibu
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'ibu-form',
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
			<?php echo $form->labelEx($model,'pekerjaan_id'); ?>
			<div class="desc">
				<?php //echo $form->textField($model,'pekerjaan_id');				
				$pekerjaan = Pekerjaan::getPekerjaan(1);
				if($pekerjaan != null)
					echo $form->dropDownList($model,'pekerjaan_id', $pekerjaan);
				else
					echo $form->dropDownList($model,'pekerjaan_id', array('prompt'=>'No Select'));?>
				<?php echo $form->error($model,'pekerjaan_id'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'agama_id'); ?>
			<div class="desc">
				<?php //echo $form->textField($model,'agama_id'); 								
				$agama = Agama::getAgama();
				if($agama != null)
					echo $form->dropDownList($model,'agama_id', $agama);
				else
					echo $form->dropDownList($model,'agama_id', array('prompt'=>'No Select'));?>
				<?php echo $form->error($model,'agama_id'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'nama_ibu'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'nama_ibu',array('maxlength'=>64)); ?>
				<?php echo $form->error($model,'nama_ibu'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'kewarganegaraan_i'); ?>
			<div class="desc">
				<?php 
				$kewarganegaraan = array(
					'WNI'=>Yii::t('phrase', 'WNI'),
					'WNA'=>Yii::t('phrase', 'WNA'),
				);
				echo $form->dropDownList($model,'kewarganegaraan_i', $kewarganegaraan); ?>
				<?php echo $form->error($model,'kewarganegaraan_i'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'tingkat_pendidikan_i'); ?>
			<div class="desc">
				<?php 
				$pendidikan = array(
					'SD'=>Yii::t('phrase', 'SD'),
					'SMP'=>Yii::t('phrase', 'SMP'),
					'SMA'=>Yii::t('phrase', 'SMA'),
					'Sarjana'=>Yii::t('phrase', 'Sarjana'),
				);
				echo $form->dropDownList($model,'tingkat_pendidikan_i', $pendidikan); ?>
				<?php echo $form->error($model,'tingkat_pendidikan_i'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'alamat_i'); ?>
			<div class="desc">
				<?php echo $form->textArea($model,'alamat_i',array('rows'=>6, 'cols'=>50,'class'=>'span-10 smaller')); ?>
				<?php echo $form->error($model,'alamat_i'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'telepon_i'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'telepon_i',array('maxlength'=>15)); ?>
				<?php echo $form->error($model,'telepon_i'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'penghasilan_i'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'penghasilan_i'); ?>
				<?php echo $form->error($model,'penghasilan_i'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'ttl_i'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'ttl_i',array('maxlength'=>50)); ?>
				<?php echo $form->error($model,'ttl_i'); ?>
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


