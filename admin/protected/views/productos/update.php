<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
	'Productoses' => array('index'),
	$model->id_producto => array('view', 'id' => $model->id_producto),
	'Update',
);

$this->menu = array(
	array('label' => 'Tarjeta de Productos', 'url' => array('index')),
	array('label' => 'Crear Productos', 'url' => array('create')),
	array('label' => 'Ver Productos', 'url' => array('view', 'id' => $model->id_producto)),
	array('label' => 'Tabla de Productos', 'url' => array('admin')),
);
?>
<div class="card-title navbar-expand-md bg-info">
	<h2>Actualizar Producto id: <?php echo $model->id_producto; ?></h2>
</div>
<?php $this->renderPartial('_form', array('model' => $model)); ?>