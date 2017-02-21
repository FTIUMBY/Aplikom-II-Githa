<?php
/**
 * Pendidikans (pendidikan)
 * @var $this PendidikanController
 * @var $model Pendidikan
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 13:18 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Pendidikans'=>array('manage'),
		$model->pendidikan_id=>array('view','id'=>$model->pendidikan_id),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
