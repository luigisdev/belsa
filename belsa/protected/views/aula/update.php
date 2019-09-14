<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Aulas', 'url'=>array('index')),
	array('label'=>'Crear Aula', 'url'=>array('create')),
	array('label'=>'Ver Aula', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Aulas', 'url'=>array('admin')),
);
?>

<h1>Modificar Aula <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>