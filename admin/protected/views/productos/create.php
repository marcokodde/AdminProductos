<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	'Crear',
);

$this->menu = array(
	array('label' => 'Tarjeta de Productos', 'url' => array('index')),
	array('label' => 'Tabla de Productos', 'url' => array('admin')),
);
?>

<div class="card-title navbar-expand-md bg-info">
	<h2>Crear Producto</h2>
</div>

<?php $this->renderPartial('_form', array('model' => $model)); ?>