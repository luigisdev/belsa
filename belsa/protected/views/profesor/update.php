<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
        array('label'=>'Lista Profesores', 'url'=>array('index')),
	array('label'=>'Crear Profesor', 'url'=>array('create')),
        array('label'=>'Ver Profesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
    
	
);
?>

<h1>Modificar Profesor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>