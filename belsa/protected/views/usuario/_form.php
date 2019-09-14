<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>
        
        <div ng-show="<?php echo $yaExiste;?>"class="alert alert-danger" role="alert">
            <strong>Ya se ha usado este correo!</strong> Ingresa otra cuenta de correo
        </div>
	<?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'tipo'); ?>
                    <?php echo $form->dropDownList($model,'tipo', Usuario::model()->damePerfiles() ,array('empty'=>'Selecciona Perfil','class'=>"form-control")); ?>       
                    <div ng-show="<?php echo strlen($form->errorSummary($model)); ?>" style="color: #C00">
                        <?php echo $form->error($model,'tipo'); ?>
                    </div>
                </div>
                
            </div> 
	</div>
        <div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'nombre',array('for'=>"ponNombre")); ?>
                    <?php echo $form->textField($model,'nombre',array('class'=>"form-control",'type'=>"text",'id'=>"ponNombre",'placeholder'=>'Martha Lucia')); ?>
                    <div ng-show="<?php echo strlen($form->errorSummary($model)); ?>" style="color: #C00">
                        <?php echo $form->error($model,'nombre'); ?>
                    </div>
                </div>
            </div>    
        </div>
	<div class="row">
            
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'apellidos'); ?>
                    <?php echo $form->textField($model,'apellidos',array('class'=>"form-control",'placeholder'=>'Gomez Lara')); ?>
                    <?php echo $form->error($model,'apellidos'); ?>
                    
                </div>
                
            </div>    
        </div>

	<div class="jumbotron">
            <h3>Datos de la Cuenta</h3>
            <div ng-show="Yii::app()->user->id_perfil">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'correo',array('for'=>"ponMail")); ?>
                    <?php echo (Yii::app()->user->tipo==1) ? $form->textField($model,'correo',array('class'=>"form-control",'type'=>"email",'id'=>"ponMail")) : '<h3>'.$model->correo.'</h3>' ; ?>
                    <?php echo $form->error($model,'correo'); ?>
                </div>
            </div>
            <div class="btn-group">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password',array('class'=>"form-control",'size'=>45,'maxlength'=>45,'placeholder'=>'Password')); ?>
                    <?php echo $form->error($model,'password'); ?>
            </div>
            <center>
                <div class="row buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-lg')); ?>
                </div>
            </center>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->