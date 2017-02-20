<?php
/**
 * Tahun Ajars (tahun-ajar)
 * @var $this TahunajarController
 * @var $model TahunAjar
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Tahun Ajars'=>array('manage'),
		$model->tahun_ajar_id=>array('view','id'=>$model->tahun_ajar_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('/tahun_ajar/_form', array('model'=>$model)); ?>