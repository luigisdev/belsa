<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <div class="col-md-6">
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
                    
                    <?php //echo $form->textField($model,'fecha',array('class'=>"form-control",'placeholder'=>'2017-05-11')); ?>
                    <?php echo $form->error($model,'fecha'); ?>
                </div><br>
                <div class="btn-group">
                     <?php echo $form->labelEx($model,'status'); ?>
                    <?php echo $form->dropDownList($model,'status', Registro::model()->dameStatus() ,array('empty'=>'Selecciona Status','class'=>"form-control")); ?>
                    <?php echo $form->error($model,'status'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'fechaInicio'); ?>
                    <?php echo $form->dropDownList($model,'fechaInicio', Horario::model()->horasInicio() ,array('empty'=>'Selecciona Hora Incio','class'=>"form-control")); ?>       
                    <?php echo $form->error($model,'fechaInicio'); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'aula'); ?>
                        <?php echo $form->dropDownList($model,'aula', Aula::model()->dameAulasVista() ,array('empty'=>'Selecciona Aula','class'=>"form-control")); ?>       
                        <?php echo $form->error($model,'aula'); ?>
                </div><br>
                <div ng-show="<?php echo Yii::app()->user->tipo==1;?>">
                <div class="btn-group">
                         <?php echo $form->labelEx($model,'usuario'); ?>
                         <?php echo $form->dropDownList($model,'usuario', Usuario::model()->dameUsuarios() ,array('empty'=>'Selecciona Usuario','class'=>"form-control")); ?>
                        <?php echo $form->error($model,'usuario'); ?>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'horario'); ?>
                    <?php echo $form->textField($model,'horario',array('class'=>"form-control",'placeholder'=>'1')); ?>
                    <?php echo $form->error($model,'horario'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'tipo'); ?>
                    <?php echo $form->dropDownList($model,'tipo', Registro::model()->dameMotivos() ,array('empty'=>'Selecciona Motivo','class'=>"form-control")); ?>
                    <?php echo $form->error($model,'tipo'); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'fechaCaducidad'); ?>
                    <?php echo $form->dropDownList($model,'fechaCaducidad', Horario::model()->horasFin() ,array('empty'=>'Selecciona Hora Caducidad','class'=>"form-control")); ?>       
                    <?php echo $form->error($model,'fechaCaducidad'); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->labelEx($model,'profesor'); ?>
                        <?php echo $form->dropDownList($model,'profesor', Profesor::model()->dameProfesores() ,array('empty'=>'Selecciona Profesor','class'=>"form-control")); ?>       
                        <?php echo $form->error($model,'profesor'); ?>
                </div>
                
            </div>
            
	</div>
        <div class="row">
            <div class="col-md-8">
                    <center>
                        <div class="form-group">
                    <?php echo $form->labelEx($model,'nota',array('for'=>"ponObservaciones")); ?>          
                    <?php echo $form->textArea($model,'nota',array('maxlength' => 300, 'rows' => 4, 'cols' => 50,'class'=>"form-control",'id'=>"ponObservaciones")); ?>          
                    <?php echo $form->error($model,'nota'); ?>
                </div>
                    </center>
               
            </div>
        </div>
                
            <center>
                <div class="row buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-lg')); ?>
                </div>
            </center>


	

<?php $this->endWidget(); ?>

</div><!-- form -->