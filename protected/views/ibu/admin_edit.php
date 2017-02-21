<?php
/**
 * Ibus (ibu)
 * @var $this IbuController
 * @var $model Ibu
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Ibus'=>array('manage'),
		$model->ibu_id=>array('view','id'=>$model->ibu_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>