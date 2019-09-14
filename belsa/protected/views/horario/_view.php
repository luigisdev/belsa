<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nrc')); ?>:</b>
	<?php echo CHtml::encode($data->nrc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode(Horario::model()->dameDias()[$data->dia]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaIni')); ?>:</b>
	<?php echo CHtml::encode($data->horaIni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaFin')); ?>:</b>
	<?php echo CHtml::encode($data->horaFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aula')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode(Aula::model()->dameAula($data->aula)), array('aula/view', 'id'=>$data->aula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode(Curso::model()->dameCurso($data->curso)), array('curso/view', 'id'=>$data->curso)); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('profesor')); ?>:</b>
	<?php echo CHtml::encode($data->profesor); ?>
	<br />

	*/ ?>

</div>