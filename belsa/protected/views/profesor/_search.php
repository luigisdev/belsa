<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->label($model,'id'); ?>
                    <?php echo $form->textField($model,'id',array('class'=>"form-control",'placeholder'=>'1')); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->label($model,'nombre'); ?>
                        <?php echo $form->textField($model,'nombre',array('class'=>"form-control",'placeholder'=>'Martha Lucia')); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->label($model,'apellidos'); ?>
                        <?php echo $form->textField($model,'apellidos',array('class'=>"form-control",'placeholder'=>'Perez')); ?>
                </div>
                
            </div>
        </div>

	
    <center>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary ')); ?>
	</div>
    </center>

<?php $this->endWidget(); ?>

</div><!-- search-form -->