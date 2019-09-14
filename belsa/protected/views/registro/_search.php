<?php
/* @var $this RegistroController */
/* @var $model Registro */
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
                        <?php echo $form->textField($model,'id',array('placeholder'=>'4','class'=>"form-control")); ?>
                </div><br>
                <div class="btn-group">
                     <?php echo $form->labelEx($model,'status'); ?>
                    <?php echo $form->dropDownList($model,'status', Registro::model()->dameStatus() ,array('empty'=>'Selecciona Status','class'=>"form-control")); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'fechaInicio'); ?>
                    <?php echo $form->dropDownList($model,'fechaInicio', Horario::model()->horasInicio() ,array('empty'=>'Selecciona Hora Incio','class'=>"form-control")); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'aula'); ?>
                        <?php echo $form->dropDownList($model,'aula', Aula::model()->dameAulasVista() ,array('empty'=>'Selecciona Aula','class'=>"form-control")); ?>
                </div><br>
                <div class="btn-group">
                         <?php echo $form->labelEx($model,'usuario'); ?>
                         <?php echo $form->dropDownList($model,'usuario', Usuario::model()->dameUsuarios() ,array('empty'=>'Selecciona Usuario','class'=>"form-control")); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'horario'); ?>
                    <?php echo $form->textField($model,'horario',array('class'=>"form-control",'placeholder'=>'1')); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'tipo'); ?>
                    <?php echo $form->dropDownList($model,'tipo', Registro::model()->dameMotivos() ,array('empty'=>'Selecciona Motivo','class'=>"form-control")); ?>
                </div><br>
	    </div>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'fechaCaducidad'); ?>
                    <?php echo $form->dropDownList($model,'fechaCaducidad', Horario::model()->horasFin() ,array('empty'=>'Selecciona Hora Caducidad','class'=>"form-control")); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'fecha'); ?>
                    <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                     array(
                             'model'=>$model,
                             'attribute'=>'fecha',
                             'language'=>'es',
                             'options'=>array(
                                 'dateFormat'=>'yy-mm-dd',
                                 'constrainInput'=>'false',
                                 'showButtonPanel'=>'false',
                                 'changeMonth'=>true,
                                 'changeYear'=>true,
                                 'duration'=>'fast',
                                 'showAnim'=>'slide',
                             ),
                             'htmlOptions'=>array(
                                 'style'=>'color: #000000',
                                 'class'=>"form-control",
                                 ),
                     ));
     ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'profesor'); ?>
                        <?php echo $form->dropDownList($model,'profesor', Profesor::model()->dameProfesores() ,array('empty'=>'Selecciona Profesor','class'=>"form-control")); ?>
                </div>
                <div class="row buttons">
                    <?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary ')); ?>
                </div>
            </div>
      	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->
