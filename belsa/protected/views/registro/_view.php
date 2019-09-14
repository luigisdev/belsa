<?php
/* @var $this RegistroController */
/* @var $data Registro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
        <?php echo CHtml::encode(Registro::model()->dameStatus()[$data->status]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
        <?php echo CHtml::encode(Registro::model()->dameMotivos()[$data->tipo]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCaducidad')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCaducidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
        <?php echo CHtml::encode(Usuario::model()->dameNombreUsuario($data->usuario)); ?>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('horario')); ?>:</b>
	<?php echo CHtml::encode($data->horario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aula')); ?>:</b>
	<?php echo CHtml::encode($data->aula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesor')); ?>:</b>
	<?php echo CHtml::encode($data->profesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	*/ ?>

</div>