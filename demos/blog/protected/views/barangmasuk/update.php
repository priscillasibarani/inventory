<?php
/* @var $this BarangmasukController */
/* @var $model Barangmasuk */

$this->breadcrumbs = array(
	'Barangmasuk' => array('index'),
	$model->idmasuk => array('view', 'id' => $model->idmasuk),
	'Update',
);
?>
<h1>Mengubah Barangmasuk <?php echo $model->idmasuk; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>