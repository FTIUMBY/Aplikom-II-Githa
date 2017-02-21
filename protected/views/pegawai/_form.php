<?php
/**
 * Pegawais (pegawai)
 * @var $this PegawaiController
 * @var $model Pegawai
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'pegawai-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<?php //begin.Messages ?>
<div id="ajax-message">
	<?php echo $form->errorSummary($model); ?>
</div>
<?php //begin.Messages ?>

<fieldset>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'NIP'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'NIP',array('size'=>5,'maxlength'=>5)); ?>
			<?php echo $form->error($model,'NIP'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'NPSN'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'NPSN',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'NPSN'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'NIK'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'NIK',array('size'=>21,'maxlength'=>21)); ?>
			<?php echo $form->error($model,'NIK'); ?>
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

	<div class="clearfix">
		<?php echo $form->labelEx($model,'tahun_ajar_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'tahun_ajar_id'); ?>
			<?php echo $form->error($model,'tahun_ajar_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'sekolah_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'sekolah_id'); ?>
			<?php echo $form->error($model,'sekolah_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'agama_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'agama_id'); ?>
			<?php echo $form->error($model,'agama_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'nama'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>64)); ?>
			<?php echo $form->error($model,'nama'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'gender'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
			<?php echo $form->error($model,'gender'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'tempat_lahir',array('size'=>60,'maxlength'=>64)); ?>
			<?php echo $form->error($model,'tempat_lahir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<div class="desc">
			<?php
			$model->tgl_lahir = !$model->isNewRecord ? (!in_array($model->tgl_lahir, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->tgl_lahir)) : '') : '';
			//echo $form->textField($model,'tgl_lahir');
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'tgl_lahir',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'tgl_lahir'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'alamat'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'jumlah_saudara'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'jumlah_saudara'); ?>
			<?php echo $form->error($model,'jumlah_saudara'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'anak_ke'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'anak_ke'); ?>
			<?php echo $form->error($model,'anak_ke'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'tahun_masuk'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'tahun_masuk',array('size'=>9,'maxlength'=>9)); ?>
			<?php echo $form->error($model,'tahun_masuk'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'gambar'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'panggilan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'panggilan',array('size'=>32,'maxlength'=>32)); ?>
			<?php echo $form->error($model,'panggilan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'kewarganegaraan_pegawai'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'kewarganegaraan_pegawai',array('size'=>3,'maxlength'=>3)); ?>
			<?php echo $form->error($model,'kewarganegaraan_pegawai'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'saudara_tiri'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'saudara_tiri'); ?>
			<?php echo $form->error($model,'saudara_tiri'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'saudara_angkat'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'saudara_angkat'); ?>
			<?php echo $form->error($model,'saudara_angkat'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'bahasa'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'bahasa',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'bahasa'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'tinggal_dengan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'tinggal_dengan',array('size'=>60,'maxlength'=>64)); ?>
			<?php echo $form->error($model,'tinggal_dengan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'jarak'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'jarak',array('size'=>2,'maxlength'=>2)); ?>
			<?php echo $form->error($model,'jarak'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'transportasi'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'transportasi',array('size'=>32,'maxlength'=>32)); ?>
			<?php echo $form->error($model,'transportasi'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'gol_darah'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'gol_darah',array('size'=>1,'maxlength'=>1)); ?>
			<?php echo $form->error($model,'gol_darah'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'penyakit'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'penyakit',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'penyakit'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'kelainan_jasmani'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'kelainan_jasmani',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'kelainan_jasmani'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'tinggi'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'tinggi',array('size'=>3,'maxlength'=>3)); ?>
			<?php echo $form->error($model,'tinggi'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'berat'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'berat',array('size'=>3,'maxlength'=>3)); ?>
			<?php echo $form->error($model,'berat'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'no_telp'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'no_telp',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'no_telp'); ?>
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


