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
		'Create',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>