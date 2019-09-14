<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Ingreso',
);
?>
<div class="page-header">
	<h1>Ingresa <small>en tu cuenta</small></h1>
</div>
<div class="row-fluid">

    <div class="span6 offset3">
<center>
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"El acceso a este sistema es privado",
	));
?>

    <div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

        <div class="row">
            <?php echo $form->labelEx($model,'Usuario*'); ?>
            <?php echo $form->textField($model,'username'); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'Contrasena*'); ?>
            <?php echo $form->passwordField($model,'password'); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>

        <div class="row rememberMe">
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php echo $form->label($model,'Recordarme'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton('Ingresar',array('class'=>'btn btn btn-primary')); ?>
        </div>

    <?php $this->endWidget(); ?>
    </div><!-- form -->
</center>
<?php $this->endWidget();?>

    </div>

</div>
