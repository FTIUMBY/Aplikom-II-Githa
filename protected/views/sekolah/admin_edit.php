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
		$model->kd_sekolah=>array('view','id'=>$model->kd_sekolah),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>