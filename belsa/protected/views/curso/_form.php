<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
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
                    <?php echo $form->labelEx($model,'clave'); ?>
                    <?php echo $form->textField($model,'clave',array('class'=>"form-control",'placeholder'=>'ID221')); ?>
                    <?php echo $form->error($model,'clave'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'materia'); ?>
                    <?php echo $form->textField($model,'materia',array('class'=>"form-control",'placeholder'=>'ABASTECIMIENTOS E INVENTARIOS')); ?>
                    <?php echo $form->error($model,'materia'); ?>
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