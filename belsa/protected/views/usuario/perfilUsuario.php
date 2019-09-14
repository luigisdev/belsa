<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Perfil',
);
?>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'correo',
		'password',
		'nombre',
		'apellidos',
		array('name'=>'tipo', 'value'=>CHtml::encode(Usuario::model()->damePerfiles()[$model->tipo])),
	),
)); ?>

<hr>
<center>
    <a class="btn btn-primary btn-lg"  href='<?php echo Yii::app()->homeUrl?>/index.php?r=usuario/modificarPerfil&id=<?php echo $model->id;?>'>
            <span class="glyphicon glyphicon-pencil"> </span> Modificar Mi Perfil
    </a>
</center>