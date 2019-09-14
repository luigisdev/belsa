<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Cargar Bitacora'

);
?>
<hr>
	<h1>
	    Cargar bitacora de hoy  <?php echo date("Y-m-d")?>
	</h1>
<div class="form">
    <div ng-show="<?php echo $existencia; ?>" class="alert alert-warning alert-dismissible" role="alert">
        <strong>Cuidadado!</strong> La bitacora del dia de hoy ya ha sido cargada.
    </div>
    <div ng-show="<?php echo $exito; ?>" class="alert alert-success " role="alert">
        <strong>Exito!</strong> La bitacora del dia de hoy fue Cargada con exito, Se cargaron <?php echo $numero; ?> registros.
    </div>
        <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargarBitacora-form',
	'enableAjaxValidation'=>false,
        )); ?>
        <center>
            <div class="row buttons" ng-hide="<?php echo $existencia; ?>">
                    <?php echo CHtml::submitButton('Cargar a Bitacora',array('class'=>'btn btn-primary btn-lg' )); ?>
            </div>
        </center>
        <?php $this->endWidget(); ?>
</div>
