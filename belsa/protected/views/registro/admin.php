<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Registros', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Registros</h1>

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
	'id'=>'registro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha',
                array('name'=>'status','value'=>'Registro::model()->dameStatus()[$data->status]' ,),
		array('name'=>'tipo','value'=>'Registro::model()->dameMotivos()[$data->tipo]' ,),
		
		'fechaInicio',
		'fechaCaducidad',
                'profesor',
                array('name'=>'profesor', 'value'=>'Profesor::model()->dameNombreProfesor($data->profesor)'),
		/*
		'nota',
		'horario',
		'aula',
		
		'usuario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
