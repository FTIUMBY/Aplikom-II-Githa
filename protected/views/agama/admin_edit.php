<?php
/**
 * Agamas (agama)
 * @var $this AgamaController
 * @var $model Agama
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Agamas'=>array('manage'),
		$model->agama_id=>array('view','id'=>$model->agama_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>