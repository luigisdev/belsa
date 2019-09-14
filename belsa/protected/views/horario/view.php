<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Horarios', 'url'=>array('index')),
	array('label'=>'Crer Horario', 'url'=>array('create')),
	array('label'=>'Modificar Horario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Horario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de que quieres borrar este horario?')),
	array('label'=>'Administrar Horario', 'url'=>array('admin')),
);
?>


<h1>Vista Horario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nrc',
                array('name'=>'dia', 'value'=>CHtml::encode(Horario::model()->dameDias()[$model->dia])),
		'horaIni',
		'horaFin',
                array('name'=>'aula', 'value'=>CHtml::encode(Aula::model()->dameAula($model->aula))),
                array('name'=>'curso', 'value'=>CHtml::encode(Curso::model()->dameCurso($model->curso))),
                array('name'=>'profesor', 'value'=>CHtml::encode(Profesor::model()->dameNombreProfesor($model->profesor))),
		//'aula',
		//'curso',
		//'profesor',
	),
)); ?>
