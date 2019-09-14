<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Aulas', 'url'=>array('index')),
	array('label'=>'Crear Aula', 'url'=>array('create')),
	array('label'=>'Modificar Aula', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Aula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de que quieres borrar esta aula?')),
	array('label'=>'Administrar Aulas', 'url'=>array('admin')),
);
?>

<h1>Vista Aula #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero',
		'edificio',
	),
)); ?>
