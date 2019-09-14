<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	$model->nombre=>array('perfilUsuario','id'=>$model->id),
	'Modificar',
);


?>
<h1>Actulizar Perfil</h1>

<?php $this->renderPartial('_form1', array('model'=>$model,'yaExiste'=>$yaExiste)); ?>