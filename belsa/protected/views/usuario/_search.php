<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
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
                    <?php echo $form->textField($model,'id',array('placeholder'=>'1','class'=>"form-control")); ?>
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'nombre',array('for'=>"ponNombre")); ?>
                    <?php echo $form->textField($model,'nombre',array('class'=>"form-control",'type'=>"text",'id'=>"ponNombre",'placeholder'=>'Martha Lucia')); ?>
                    
                </div>
            </div> 
            <div class="col-md-6">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'tipo'); ?>
                    <?php echo $form->dropDownList($model,'tipo', Usuario::model()->damePerfiles() ,array('empty'=>'Selecciona Perfil','class'=>"form-control")); ?>       
                </div><br>
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'apellidos'); ?>
                    <?php echo $form->textField($model,'apellidos',array('class'=>"form-control",'placeholder'=>'Gomez Lara')); ?>
                </div>
            </div> 
	</div>
        <div class="row">
            <div class="col-md-8">
                <div class="btn-group">
                    <?php echo $form->labelEx($model,'correo'); ?>
                    <?php echo $form->textField($model,'correo',array('class'=>"form-control",'placeholder'=>'ejemplo@gmail.com')); ?>
                    
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