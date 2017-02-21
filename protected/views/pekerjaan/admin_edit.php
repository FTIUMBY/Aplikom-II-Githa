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
		$model->pekerjaan_id=>array('view','id'=>$model->pekerjaan_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
