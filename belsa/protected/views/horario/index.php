<?php
/* @var $this HorarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horarios',
);

$this->menu=array(
	array('label'=>'Crear Horario', 'url'=>array('create')),
	array('label'=>'Administrar Horarios', 'url'=>array('admin')),
);
?>

<h1>Horarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
