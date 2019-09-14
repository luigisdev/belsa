<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Cursos', 'url'=>array('index')),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Crear Curso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>