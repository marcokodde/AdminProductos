<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	$model->id_producto,
);

$this->menu = array(
	array('label' => 'Tarjeta de Productos', 'url' => array('index')),
	array('label' => 'Crear Productos', 'url' => array('create')),
	array('label' => 'Actualizar Productos', 'url' => array('update', 'id' => $model->id_producto)),
	array('label' => 'Borrar Productos', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_producto), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>
<div class="card-title navbar-expand-md bg-info">
	<h2>Ver Producto id: <?php echo $model->id_producto; ?></h2>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		'id_marca',
		'descripcion',
		'stock',
	),
)); ?>