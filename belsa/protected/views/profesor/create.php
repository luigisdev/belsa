<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Profesores', 'url'=>array('index')),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Crear Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>