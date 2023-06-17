<?php

class ProductosController extends Controller
{
	//Columnas para mostrar la informacion del controlador
	public $layout = '//layouts/column2';


	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	// Reglas para controlar el ingreso de datos en el formulario
	public function accessRules()
	{
		return array(
			array(
				'allow',
				'actions' => array('index', 'view'),
				'users' => array('*'),
			),
			array(
				'allow',
				'actions' => array('create', 'update'),
				'users' => array('@'),
			),
			array(
				'allow',
				'actions' => array('admin', 'delete'),
				'users' => array('admin'),
			),
			array(
				'deny',
				'users' => array('*'),
			),
		);
	}

	// Ver un solo registro
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	// Creacion de nuevo Producto 
	public function actionCreate()
	{
		$model = new Productos;

		if (isset($_POST['Productos'])) {
			$model->attributes = $_POST['Productos'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->id_producto));
		}
		$this->render('create', array(
			'model' => $model,
		));
	}

	// Actualizar el producto seleccionado
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		if (isset($_POST['Productos'])) {
			$model->attributes = $_POST['Productos'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->id_producto));
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	// Borrado de producto
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// Borrado de registro mediante ajax, para actualizar sin refrescar
		if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	// Mostrar todos los registros en forma de Tarjeta
	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Productos');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	// Mostrar los productos en forma de Tabla
	public function actionAdmin()
	{
		$model = new Productos('search');
		$model->unsetAttributes();
		if (isset($_GET['Productos']))
			$model->attributes = $_GET['Productos'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	// Validamos si tenemos un registro del producto seleccionado
	public function loadModel($id)
	{
		$model = Productos::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	// Funcion Protegida
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'productos-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
