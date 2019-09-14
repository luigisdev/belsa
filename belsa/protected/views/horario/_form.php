<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
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
                    <?php echo $form->labelEx($model,'nrc'); ?>
                    <?php echo $form->textField($model,'nrc',array('class'=>"form-control",'placeholder'=>'50014')); ?>
                    <?php echo $form->error($model,'nrc'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'Hora de Inicio'); ?>
                    <?php echo $form->textField($model,'horaIni',array('class'=>"form-control",'placeholder'=>'0900')); ?>
                    <?php echo $form->error($model,'horaIni'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'curso'); ?>
                    <?php echo $form->dropDownList($model,'curso', Curso::model()->dameTodosLosCursos() ,array('empty'=>'Selecciona Curso','class'=>"form-control")); ?>       
                    <?php echo $form->error($model,'curso'); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'profesor'); ?>
                        <?php echo $form->dropDownList($model,'profesor', Profesor::model()->dameProfesores() ,array('empty'=>'Selecciona Profesor','class'=>"form-control")); ?>       
                        <?php echo $form->error($model,'profesor'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'dia'); ?>
                    <?php echo $form->dropDownList($model,'dia', Horario::model()->dameDias() ,array('empty'=>'Selecciona Dia','class'=>"form-control")); ?>       
                    <?php echo $form->error($model,'dia'); ?>
                    
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'Hora de Fin'); ?>
                    <?php echo $form->textField($model,'horaFin',array('class'=>"form-control",'placeholder'=>'1055')); ?>
                    <?php echo $form->error($model,'horaFin'); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'aula'); ?>
                        <?php echo $form->dropDownList($model,'aula', Aula::model()->dameAulasVista() ,array('empty'=>'Selecciona Aula','class'=>"form-control")); ?>       
                        <?php echo $form->error($model,'aula'); ?>
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