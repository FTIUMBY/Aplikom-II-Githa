<?php
/**
 * Sekolahs (sekolah)
 * @var $this SekolahController
 * @var $model Sekolah
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 06:48 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Sekolahs'=>array('manage'),
		$model->kd_sekolah=>array('view','id'=>$model->kd_sekolah),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
