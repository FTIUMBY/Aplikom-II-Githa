<?php
/**
 * Pendidikans (pendidikan)
 * @var $this PendidikanController
 * @var $model Pendidikan
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 13:18 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<ul>
		<li>
			<?php echo $model->getAttributeLabel('pendidikan_id'); ?><br/>
			<?php echo $form->textField($model,'pendidikan_id'); ?>
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
			<?php echo $model->getAttributeLabel('sd_nama'); ?><br/>
			<?php echo $form->textField($model,'sd_nama',array('size'=>11,'maxlength'=>11)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sd_tahun_mulai'); ?><br/>
			<?php echo $form->textField($model,'sd_tahun_mulai'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sd_tahun_akhir'); ?><br/>
			<?php echo $form->textField($model,'sd_tahun_akhir'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('smp_nama'); ?><br/>
			<?php echo $form->textField($model,'smp_nama',array('size'=>30,'maxlength'=>30)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('smp_tahun_mulai'); ?><br/>
			<?php echo $form->textField($model,'smp_tahun_mulai'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('smp_tahun_akhir'); ?><br/>
			<?php echo $form->textField($model,'smp_tahun_akhir'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sma_nama'); ?><br/>
			<?php echo $form->textField($model,'sma_nama',array('size'=>30,'maxlength'=>30)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sma_tahun_mulai'); ?><br/>
			<?php echo $form->textField($model,'sma_tahun_mulai'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sma_tahun_akhir'); ?><br/>
			<?php echo $form->textField($model,'sma_tahun_akhir'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sma_jurusan'); ?><br/>
			<?php echo $form->textField($model,'sma_jurusan',array('size'=>25,'maxlength'=>25)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sj_nama'); ?><br/>
			<?php echo $form->textField($model,'sj_nama',array('size'=>25,'maxlength'=>25)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sj_tahun_mulai'); ?><br/>
			<?php echo $form->textField($model,'sj_tahun_mulai'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sj_tahun_akhir'); ?><br/>
			<?php echo $form->textField($model,'sj_tahun_akhir'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('sj_jurusan'); ?><br/>
			<?php echo $form->textField($model,'sj_jurusan',array('size'=>25,'maxlength'=>25)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('pc_nama'); ?><br/>
			<?php echo $form->textField($model,'pc_nama',array('size'=>30,'maxlength'=>30)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('pc_tahun_mulai'); ?><br/>
			<?php echo $form->textField($model,'pc_tahun_mulai'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('pc_tahun_akhir'); ?><br/>
			<?php echo $form->textField($model,'pc_tahun_akhir'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('pc_jurusan'); ?><br/>
			<?php echo $form->textField($model,'pc_jurusan',array('size'=>25,'maxlength'=>25)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('dk_nama'); ?><br/>
			<?php echo $form->textField($model,'dk_nama',array('size'=>11,'maxlength'=>11)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('dk_tahun_mulai'); ?><br/>
			<?php echo $form->textField($model,'dk_tahun_mulai'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('dk_tahun_akhir'); ?><br/>
			<?php echo $form->textField($model,'dk_tahun_akhir'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('dk_jurusan'); ?><br/>
			<?php echo $form->textField($model,'dk_jurusan',array('size'=>25,'maxlength'=>25)); ?>
		</li>

		<li class="submit">
			<?php echo CHtml::submitButton(Yii::t('phrase', 'Search')); ?>
		</li>
	</ul>
<?php $this->endWidget(); ?>
