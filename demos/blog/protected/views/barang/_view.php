<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBarang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kodeBarang), array('view', 'id'=>$data->kodeBarang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaBarang')); ?>:</b>
	<?php echo CHtml::encode($data->namaBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenisBarang')); ?>:</b>
	<?php echo CHtml::encode($data->jenisBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />


</div>