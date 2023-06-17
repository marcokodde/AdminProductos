<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	'Home',
);

$this->menu = array(
	array('label' => 'Tarjeta de Productos', 'url' => array('index')),
	array('label' => 'Crear Producto', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="card-title navbar-expand-md bg-info">
	<h2>Productos</h2>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'productos-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		'id_marca',
		'descripcion',
		'stock',

		array(
			'class' => 'CButtonColumn',
			'template' => '{update} {view} {delete}',
			'buttons' => array(
				'update' => array(
					'label' => 'Ver',
					'imageUrl' => Yii::app()->request->baseUrl . '/images/eye.svg',
					'options' => array('class' => 'icon-edit'),
				),
				'view' => array(
					'label' => 'Editar',
					'imageUrl' => Yii::app()->request->baseUrl . '/images/pencil.svg',
					'options' => array('class' => 'icon-search'),
				),
				'delete' => array(
					'label' => 'Eliminar',
					'imageUrl' => Yii::app()->request->baseUrl . '/images/trash.svg',
					'options' => array('class' => 'icon-remove'),
				),
			),
		),
	),
)); ?>