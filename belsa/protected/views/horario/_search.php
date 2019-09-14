<?php
/* @var $this HorarioController */
/* @var $model Horario */
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
                   <?php echo $form->labelEx($model,'dia'); ?>
                    <?php echo $form->dropDownList($model,'dia', Horario::model()->dameDias() ,array('empty'=>'Selecciona Dia','class'=>"form-control")); ?>
                </div><br>
		<div class="btn-group">
                    <?php echo $form->labelEx($model,'Hora de Inicio'); ?>
                    <?php echo $form->dropDownList($model,'horaIni',Horario::model()->horasInicio(),array('class'=>"form-control",'empty'=>'Selecciona Hora Incio')); ?>
		</div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'profesor'); ?>
                        <?php echo $form->dropDownList($model,'profesor', Profesor::model()->dameProfesores() ,array('empty'=>'Selecciona Profesor','class'=>"form-control")); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'nrc'); ?>
                    <?php echo $form->textField($model,'nrc',array('class'=>"form-control",'placeholder'=>'50014')); ?>
                    <?php echo $form->error($model,'nrc'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'curso'); ?>
                    <?php echo $form->dropDownList($model,'curso', Curso::model()->dameTodosLosCursos() ,array('empty'=>'Selecciona Curso','class'=>"form-control")); ?>
                </div><br>
		<div class="btn-group">
	                  <?php echo $form->labelEx($model,'Hora de Fin'); ?>
	                  <?php echo $form->dropDownList($model,'horaFin', Horario::model()->horasFin() ,array('empty'=>'Selecciona Hora Caducidad','class'=>"form-control")); ?>
	        </div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'aula'); ?>
                        <?php echo $form->dropDownList($model,'aula', Aula::model()->dameAulasVista() ,array('empty'=>'Selecciona Aula','class'=>"form-control")); ?>
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
