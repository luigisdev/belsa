<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	$model->id,
);
?>

<?php
$this->menu=array(
	array('label'=>'Lista Registros', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Modificar Registro', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de que quieres borrar esta registro?')),
	array('label'=>'Administrar Registros', 'url'=>array('admin')),
);
?>

<h1>Vista Registro #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
                array('name'=>'status', 'value'=>CHtml::encode(Registro::model()->dameStatus()[$model->status])),
		array('name'=>'tipo', 'value'=>CHtml::encode(Registro::model()->dameMotivos()[$model->tipo])),
		'fechaInicio',
		'fechaCaducidad',
		'nota',
		'horario',
		array('name'=>'aula', 'value'=>CHtml::encode(Aula::model()->dameAula($model->aula))),
                array('name'=>'profesor', 'value'=>CHtml::encode(Profesor::model()->dameNombreProfesor($model->profesor))),
                array('name'=>'usuario', 'value'=>CHtml::encode(Usuario::model()->dameNombreUsuario($model->usuario))),

	),
)); ?>
