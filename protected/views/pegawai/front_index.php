<?php
/**
 * Pegawais (pegawai)
 * @var $this PegawaiController
 * @var $model Pegawai
 * @var $dataProvider CActiveDataProvider
 * version: 0.0.1
 *
 */

	$this->breadcrumbs=array(
		'Pegawais',
	);
?>

<?php $this->widget('application.components.system.FListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager' => array(
		'header' => '',
	), 
	'summaryText' => '',
	'itemsCssClass' => 'items clearfix',
	'pagerCssClass'=>'pager clearfix',
)); ?>
