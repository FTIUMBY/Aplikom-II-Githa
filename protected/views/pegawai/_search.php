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

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<ul>
		<li>
			<?php echo $model->getAttributeLabel('pegawai_id'); ?><br/>
			<?php echo $form->textField($model,'pegawai_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('NIP'); ?><br/>
			<?php echo $form->textField($model,'NIP',array('size'=>5,'maxlength'=>5)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('NPSN'); ?><br/>
			<?php echo $form->textField($model,'NPSN',array('size'=>10,'maxlength'=>10)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('NIK'); ?><br/>
			<?php echo $form->textField($model,'NIK',array('size'=>21,'maxlength'=>21)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('status'); ?><br/>
			<?php echo $form->textField($model,'status'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('agama_id'); ?><br/>
			<?php echo $form->textField($model,'agama_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('nama'); ?><br/>
			<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>64)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('gender'); ?><br/>
			<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('tempat_lahir'); ?><br/>
			<?php echo $form->textField($model,'tempat_lahir',array('size'=>60,'maxlength'=>64)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('tgl_lahir'); ?><br/>
			<?php echo $form->textField($model,'tgl_lahir'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('alamat'); ?><br/>
			<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('jumlah_saudara'); ?><br/>
			<?php echo $form->textField($model,'jumlah_saudara'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('anak_ke'); ?><br/>
			<?php echo $form->textField($model,'anak_ke'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('tahun_masuk'); ?><br/>
			<?php echo $form->textField($model,'tahun_masuk',array('size'=>9,'maxlength'=>9)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('gambar'); ?><br/>
			<?php echo $form->textArea($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('panggilan'); ?><br/>
			<?php echo $form->textField($model,'panggilan',array('size'=>32,'maxlength'=>32)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('kewarganegaraan_pegawai'); ?><br/>
			<?php echo $form->textField($model,'kewarganegaraan_pegawai',array('size'=>3,'maxlength'=>3)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('saudara_tiri'); ?><br/>
			<?php echo $form->textField($model,'saudara_tiri'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('saudara_angkat'); ?><br/>
			<?php echo $form->textField($model,'saudara_angkat'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('bahasa'); ?><br/>
			<?php echo $form->textArea($model,'bahasa',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('tinggal_dengan'); ?><br/>
			<?php echo $form->textField($model,'tinggal_dengan',array('size'=>60,'maxlength'=>64)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('jarak'); ?><br/>
			<?php echo $form->textField($model,'jarak',array('size'=>2,'maxlength'=>2)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('transportasi'); ?><br/>
			<?php echo $form->textField($model,'transportasi',array('size'=>32,'maxlength'=>32)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('gol_darah'); ?><br/>
			<?php echo $form->textField($model,'gol_darah',array('size'=>1,'maxlength'=>1)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('penyakit'); ?><br/>
			<?php echo $form->textArea($model,'penyakit',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('kelainan_jasmani'); ?><br/>
			<?php echo $form->textArea($model,'kelainan_jasmani',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('tinggi'); ?><br/>
			<?php echo $form->textField($model,'tinggi',array('size'=>3,'maxlength'=>3)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('berat'); ?><br/>
			<?php echo $form->textField($model,'berat',array('size'=>3,'maxlength'=>3)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('no_telp'); ?><br/>
			<?php echo $form->textField($model,'no_telp',array('size'=>15,'maxlength'=>15)); ?>
		</li>

		<li class="submit">
			<?php echo CHtml::submitButton(Yii::t('phrase', 'Search')); ?>
		</li>
	</ul>
<?php $this->endWidget(); ?>
