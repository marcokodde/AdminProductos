<?php

class SiteController extends Controller
{

	public function actions()
	{
		return array(
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}

	// Vista principal del sistema
	public function actionIndex()
	{
		$this->render('index');
	}


	public function actionError()
	{
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}




	// Se trabaja con el login del sitio creado
	public function actionLogin()
	{
		$model = new LoginForm;

		// Si la validacion viee por un ajax
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if (isset($_POST['LoginForm'])) {
			$model->attributes = $_POST['LoginForm'];

			if ($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}

		$this->render('login', array('model' => $model));
	}

	// Se ocupa el logout del controlador Site
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
