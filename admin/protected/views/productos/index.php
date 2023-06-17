<?php
/* @var $this ProductosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Productos',
);

$this->menu = array(
	array('label' => 'Crear Producto', 'url' => array('create')),
	array('label' => 'Tabla de Productos', 'url' => array('admin')),
);
?>

<div class="card-title navbar-expand-md bg-info">
	<h2>Productos</h2>
</div>
<div class="card">
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider' => $dataProvider,
		'itemView' => '_view',
	)); ?>
</div>