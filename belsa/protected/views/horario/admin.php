<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Horarios', 'url'=>array('index')),
	array('label'=>'Crear Horario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#horario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Horarios</h1>

<p>
Opcionalmente puedes introducir un operador de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo debe realizarse la comparacion.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'horario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nrc',
		array('name'=>'dia','value'=>'Horario::model()->dameDias()[$data->dia]' ,),
		'horaIni',
		'horaFin',
                 array('name'=>'aula','value'=>'Aula::model()->dameAula($data->aula)' ,),
		//'aula',
		/*
		'curso',
		'profesor',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
