<?php
/**
 * Agamas (agama)
 * @var $this AgamaController
 * @var $model Agama
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
			<?php echo $model->getAttributeLabel('agama_id'); ?><br/>
			<?php echo $form->textField($model,'agama_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('agama_code'); ?><br/>
			<?php echo $form->textField($model,'agama_code',array('size'=>3,'maxlength'=>3)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('agama_name'); ?><br/>
			<?php echo $form->textField($model,'agama_name',array('size'=>32,'maxlength'=>32)); ?>
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
