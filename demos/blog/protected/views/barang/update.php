<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->kodeBarang=>array('view','id'=>$model->kodeBarang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Barang', 'url'=>array('index')),
	array('label'=>'Create Barang', 'url'=>array('create')),
	array('label'=>'View Barang', 'url'=>array('view', 'id'=>$model->kodeBarang)),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h1>Update Barang <?php echo $model->kodeBarang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>