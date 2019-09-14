<?php
/* @var $this AulaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aulas',
);

$this->menu=array(
	array('label'=>'Crear Aula', 'url'=>array('create')),
	array('label'=>'Administrar Aulas', 'url'=>array('admin')),
);
?>

<h1>Aulas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
