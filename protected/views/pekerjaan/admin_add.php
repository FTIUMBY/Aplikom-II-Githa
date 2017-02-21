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
		'Create',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
