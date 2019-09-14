<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Registros', 'url'=>array('index')),
	array('label'=>'Administrar Registros', 'url'=>array('admin')),
);
?>

<h1>Crear Registro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>