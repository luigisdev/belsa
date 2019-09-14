<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Cursos', 'url'=>array('index')),
	array('label'=>'Crear Curso', 'url'=>array('create')),
	array('label'=>'Modificar Curso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de que quieres borrar este curso?')),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Vista Curso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'clave',
		'materia',
	),
)); ?>
