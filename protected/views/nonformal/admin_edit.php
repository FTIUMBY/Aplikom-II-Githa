<?php
/**
 * Nonformals (nonformal)
 * @var $this NonformalController
 * @var $model Nonformal
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Nonformals'=>array('manage'),
		$model->nonformal_id=>array('view','id'=>$model->nonformal_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>