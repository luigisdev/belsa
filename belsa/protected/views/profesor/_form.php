<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-form',
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
                    <?php echo $form->labelEx($model,'nombre',array('for'=>"ponNombre")); ?>
                    <?php echo $form->textField($model,'nombre',array('class'=>"form-control",'placeholder'=>'Martha Lucia')); ?>
                    <div ng-show="<?php echo strlen($form->errorSummary($model)); ?>" style="color: #C00">
                        <?php echo $form->error($model,'nombre'); ?>
                    </div>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'apellidos'); ?>
                    <?php echo $form->textField($model,'apellidos',array('class'=>"form-control",'placeholder'=>'Gomez Lara')); ?>
                    <?php echo $form->error($model,'apellidos'); ?>
                </div>
            </div>    
        </div>

            <center>
                <div class="row buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-lg')); ?>
                </div>
            </center>

<?php $this->endWidget(); ?>

</div><!-- form -->