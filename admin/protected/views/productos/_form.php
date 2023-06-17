<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="card">
	<div class="form">

		<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'productos-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// There is a call to performAjaxValidation() commented in generated controller code.
			// See class documentation of CActiveForm for details on this.
			'enableAjaxValidation' => false,
		)); ?>

		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<div class="col-lg-3 m-4">
				<div class="form-control">
					<?php echo $form->labelEx($model, 'codigo'); ?>
					<?php echo $form->textField($model, 'codigo', array('size' => 10, 'maxlength' => 10)); ?>
					<?php echo $form->error($model, 'codigo'); ?>
				</div>
				<div class="form-control">
					<?php echo $form->labelEx($model, 'sku'); ?>
					<?php echo $form->textField($model, 'sku', array('size' => 10, 'maxlength' => 10)); ?>
					<?php echo $form->error($model, 'sku'); ?>
				</div>
			</div>

			<div class="col-lg-3 m-4">
				<div class="form-control">
					<?php echo $form->labelEx($model, 'id_marca'); ?>
					<?php echo $form->textField($model, 'id_marca', array('size' => 10, 'maxlength' => 10)); ?>
					<?php echo $form->error($model, 'id_marca'); ?>
				</div>
				<div class="form-control">
					<?php echo $form->labelEx($model, 'stock'); ?>
					<?php echo $form->textField($model, 'stock', array('size' => 10, 'maxlength' => 10)); ?>
					<?php echo $form->error($model, 'stock'); ?>
				</div>
			</div>

			<div class="col-lg-3 m-4">
				<div class="form-control">
					<?php echo $form->labelEx($model, 'nombre'); ?>
					<?php echo $form->textField($model, 'nombre', array('size' => 15, 'maxlength' => 255)); ?>
					<?php echo $form->error($model, 'nombre'); ?>
				</div>
				<div class="form-control">
					<?php echo $form->labelEx($model, 'descripcion'); ?>
					<?php echo $form->textField($model, 'descripcion', array('size' => 15, 'maxlength' => 255)); ?>
					<?php echo $form->error($model, 'descripcion'); ?>
				</div>
			</div>

			<div class="form">
				<button class="btn btn-success" type="submit">
					Guardar
				</button>
			</div>

			<?php $this->endWidget(); ?>
		</div>
	</div><!-- form -->
</div>