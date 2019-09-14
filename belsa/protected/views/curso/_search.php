<?php
/* @var $this CursoController */
/* @var $model Curso */
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
                        <?php echo $form->label($model,'clave'); ?>
                        <?php echo $form->textField($model,'clave',array('class'=>"form-control",'placeholder'=>'ID221')); ?>
                </div><br>

                <div class="btn-group">
                        <?php echo $form->label($model,'materia'); ?>
                        <?php echo $form->textField($model,'materia',array('class'=>"form-control",'placeholder'=>'ABASTECIMIENTOS E INVENTARIOS')); ?>
                </div><br>
                
            </div>
        </div>

	
        <center>
            <div class="row buttons">
                    <?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary ')); ?>
            </div>
        </center>
	

<?php $this->endWidget(); ?>

</div><!-- search-form -->