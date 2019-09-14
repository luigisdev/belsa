<?php
/* @var $this AulaController */
/* @var $model Aula */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aula-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'edificio'); ?>
                    <?php echo $form->textField($model,'edificio',array('class'=>"form-control",'placeholder'=>'X')); ?>
                    <?php echo $form->error($model,'edificio'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'numero'); ?>
                    <?php echo $form->textField($model,'numero',array('class'=>"form-control",'placeholder'=>'17')); ?>
                    <?php echo $form->error($model,'numero'); ?>
                </div>
            </div>
            
	</div>
        <div class="row">
            <center>
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-lg')); ?>
            </center>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->