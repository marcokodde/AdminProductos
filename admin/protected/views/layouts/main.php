<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page">
		<nav class="navbar navbar-expand-lg bg-dark">
			<nav class="navbar bg-body-tertiary">
				<div class="container">
					<a class="navbar-brand" href="#">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="Bootstrap" width="120" height="40">
					</a>
				</div>
			</nav>
			<div class="container-fluid">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item" <p class="fs-1">
						<?php $this->widget('zii.widgets.CMenu', array(
							'items' => array(
								array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
							),
						)); ?>
						</p>
					<li class="nav-item">
						<p class="fs-1">
							<?php $this->widget('zii.widgets.CMenu', array(
								'items' => array(
									array('label' => 'Productos', 'url' => array('/productos/admin'), 'visible' => !Yii::app()->user->isGuest),
								),
							)); ?>
						</p>

					</li>
					<li class="nav-item">
						<p class="fs-1">
							<?php $this->widget('zii.widgets.CMenu', array(
								'items' => array(
									array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
								),
							)); ?>
						</p>

					</li>
				</ul>
			</div>
		</nav>

		<?php if (isset($this->breadcrumbs)) : ?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links' => $this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif ?>
		<div class="container py-2">
			<div class="p-2 mb-4 bg-light rounded-3">
				<div class="container-fluid py-2">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
		<div class="clear"></div>

		<footer id="footer" class="mt-auto py-3 bg-light">
			<div class="container">
				<div class="row text-muted">
					<div class="col-md-6 text-center text-md-start">Company @ 2023 &copy; By Trupper S A de C V. All right reserved <?= date('Y') ?></div>
				</div>
			</div>
		</footer>

	</div><!-- page -->

</body>

</html>