<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	$model->idbarang=>array('view','id'=>$model->idbarang),
	'Update',
);
?>
<h1>Mengubah Stock <?php echo $model->idbarang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>