<?php
/**
 * Sekolahs (sekolah)
 * @var $this SekolahController
 * @var $model Sekolah
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Sekolahs'=>array('manage'),
		'Create',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>