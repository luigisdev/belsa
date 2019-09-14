<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Aulas', 'url'=>array('index')),
	array('label'=>'Administrar Aulas', 'url'=>array('admin')),
);
?>

<h1>Crear Aula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>