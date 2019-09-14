<?php
/* @var $this AulaController */
/* @var $model Aula */
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
                        <?php echo $form->label($model,'edificio'); ?>
                        <?php echo $form->textField($model,'edificio',array('class'=>"form-control",'placeholder'=>'X')); ?>
                </div><br>
                <div class="btn-group">
                        <?php echo $form->label($model,'numero'); ?>
                        <?php echo $form->textField($model,'numero',array('class'=>"form-control",'placeholder'=>'17')); ?>
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