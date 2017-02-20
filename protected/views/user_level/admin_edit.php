<?php
/**
 * User Levels (user-level)
 * @var $this UserlevelController
 * @var $model UserLevel
 * @var $form CActiveForm
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'User Levels'=>array('manage'),
		$model->level_id=>array('view','id'=>$model->level_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('/user_level/_form', array('model'=>$model)); ?>