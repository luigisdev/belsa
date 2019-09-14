<?php $this->pageTitle='Belsa'; ?>
<div class="page-header text-center">
    <h1>Bienvenido a <?php echo CHtml::encode(Yii::app()->name); ?></h1>
</div>
<div class="btn-group">
       <?php echo CHtml::link('<i class="icon-time icon-white"></i>Horario',array('scrapping/horario1'),array('class' => 'btn btn-primary')); ?>
       <?php echo CHtml::link('<i class="icon-time icon-white"></i> 2 Horarios ',array('scrapping/horario2'),array('class' => 'btn btn-primary')); ?>
       <?php echo CHtml::link('<i class="icon-time icon-white"></i> 3 Horarios ',array('scrapping/horario3'),array('class' => 'btn btn-primary')); ?>
</div>
