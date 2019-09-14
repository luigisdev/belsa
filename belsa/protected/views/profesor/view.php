<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Profesores', 'url'=>array('index')),
	array('label'=>'Crear Profesor', 'url'=>array('create')),
	array('label'=>'Modificar Profesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de que quieres borrar este profesor?')),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Vista Profesor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellidos',
	),
)); ?>
