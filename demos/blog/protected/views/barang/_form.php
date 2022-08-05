<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'namaBarang'); ?>
		<?php echo $form->textField($model,'namaBarang',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'namaBarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stok'); ?>
		<?php echo $form->textField($model,'stok'); ?>
		<?php echo $form->error($model,'stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenisBarang'); ?>
		<?php echo $form->textField($model,'jenisBarang',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jenisBarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->textField($model,'gambar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->