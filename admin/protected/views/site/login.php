<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
	'Login',
);
?>
<div class="container py-2">
	<div class="p-2 mb-4 bg-light rounded-3">
		<div class="container-fluid py-2">
			<div class="card-title navbar-expand-md bg-info">
				<h2>Admin Trupper</h2>
			</div>
			<h1 class="text-center">Login</h1>

			<p class="text-center">Por favor agrega tus credenciales para poder acceder:</p>

			<div class="form">
				<?php $form = $this->beginWidget('CActiveForm', array(
					'id' => 'login-form',
					'enableClientValidation' => true,
					'clientOptions' => array(
						'validateOnSubmit' => true,
					),
				)); ?>
				<div class="row">
					<div class="col-lg-3">

					</div>
					<div class="col-lg-6">
						<div class="form-control">
							<?php echo $form->labelEx($model, 'Usuario'); ?>
							<?php echo $form->textField($model, 'username'); ?>
							<?php echo $form->error($model, 'username'); ?>
						</div>

						<div class="form-control">
							<?php echo $form->labelEx($model, 'Contraseña'); ?>
							<?php echo $form->passwordField($model, 'password'); ?>
							<?php echo $form->error($model, 'password'); ?>
						</div>

						<div class="form-control">
							<button class="btn btn-success" type="submit">Acceder</button>
						</div>
					</div>
				</div>
			</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>