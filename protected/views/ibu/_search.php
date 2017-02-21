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

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<ul>
		<li>
			<?php echo $model->getAttributeLabel('ibu_id'); ?><br/>
			<?php echo $form->textField($model,'ibu_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('status'); ?><br/>
			<?php echo $form->textField($model,'status'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('pegawai_id'); ?><br/>
			<?php echo $form->textField($model,'pegawai_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('pekerjaan_id'); ?><br/>
			<?php echo $form->textField($model,'pekerjaan_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('agama_id'); ?><br/>
			<?php echo $form->textField($model,'agama_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('nama_ibu'); ?><br/>
			<?php echo $form->textField($model,'nama_ibu',array('size'=>50,'maxlength'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('kewarganegaraan_i'); ?><br/>
			<?php echo $form->textField($model,'kewarganegaraan_i',array('size'=>3,'maxlength'=>3)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('tingkat_pendidikan_i'); ?><br/>
			<?php echo $form->textField($model,'tingkat_pendidikan_i',array('size'=>7,'maxlength'=>7)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('alamat_i'); ?><br/>
			<?php echo $form->textField($model,'alamat_i',array('size'=>60,'maxlength'=>150)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('telepon_i'); ?><br/>
			<?php echo $form->textField($model,'telepon_i',array('size'=>12,'maxlength'=>12)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('penghasilan_i'); ?><br/>
			<?php echo $form->textField($model,'penghasilan_i'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('ttl_i'); ?><br/>
			<?php echo $form->textField($model,'ttl_i',array('size'=>50,'maxlength'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('creation_date'); ?><br/>
			<?php echo $form->textField($model,'creation_date'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('creation_id'); ?><br/>
			<?php echo $form->textField($model,'creation_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('modified_date'); ?><br/>
			<?php echo $form->textField($model,'modified_date'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('modified_id'); ?><br/>
			<?php echo $form->textField($model,'modified_id'); ?>
		</li>

		<li class="submit">
			<?php echo CHtml::submitButton(Yii::t('phrase', 'Search')); ?>
		</li>
	</ul>
<?php $this->endWidget(); ?>
