<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Asignar Aula'

);
?>
<h1>
    Asignar aula <?php echo CHtml::encode(Aula::model()->dameAula($aula));?>
</h1>
<div  ng-controller="asignarAula" >
    <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'registro-form',
        'enableAjaxValidation'=>false,
        ));
        //(($inicio)>0)? $numero=($numero-1):$numero ;
        $fin=$inicio + ($numero);

        ?>


            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                            <h4><strong class="text-info">Profesor</strong></h4>
                            <?php echo $form->dropDownList($model,'profesor', Profesor::model()->dameProfesores() ,array('empty'=>'Selecciona Profesor','class'=>"form-control",'ng-model'=>'profesor','ng-change'=>'informacion=false; cambiarAula=false')); ?>
                            <?php echo $form->error($model,'profesor'); ?>
                    </div><br />
                    <div class="btn-group">
                        <h4><strong class="text-info">Notas</strong></h4>
                        <?php echo $form->textArea($model,'nota',array('maxlength' => 300, 'rows' => 4, 'cols' => 50,'class'=>"form-control",'ng-model'=>'nota','ng-change'=>'informacion=false; cambiarAula=false;')); ?>
                        <?php echo $form->error($model,'nota'); ?>
                    </div>
                    <div class="form-group" ng-show="profesor">
                        <button type="button" class="btn btn-primary bnt-lg" ng-click="informacion=true; cambiarAula=false;"  >Continuar</button>
                        <?php echo CHtml::link('Cambiar Aula/Horario',array('registro/buscarAula'),array('class' => 'btn btn-primary','ng-show'=>'cambiarAula','ng-click'=>'informacion=true')); ?>
                    </div>
                </div>
                <div class="col-md-6" ng-show="informacion">
                    <div>
                        <h2>¿Estás seguro de realizar esta asignación?</h2>
                        <div>
                            <button type="button"  class="btn btn-primary btn-sm" ng-click="asignar=true">Si</button>
                            <button type="button"  class="btn btn-primary btn-sm" ng-click="asignar=false; informacion=false; cambiarAula=true;">No</button>
                        </div>

                        <h4><strong>Aula: </strong><?php echo CHtml::encode(Aula::model()->dameAula($aula));?></h4>
                        <h4><strong>Hora De Inicio: </strong><?php echo CHtml::encode(Horario::model()->dameHorasPosiblesInicio()[$inicio]);?></h4>
                        <h4><strong>Hora De Caducidad: </strong><?php echo CHtml::encode(Horario::model()->dameHorasCaducidad()[$fin]);?></h4>
                        <h4><strong>Nota: </strong>{{nota}}</h4>
                    </div>


                </div>
            </div>
            <div class="form-group hidden">
                <?php echo $form->textField($model,'aula',array('value'=>$aula, 'class'=>"form-control",'placeholder'=>'0900')); ?>
                <?php echo $form->textField($model,'fechaInicio',array('value'=>CHtml::encode(Horario::model()->dameHorasPosiblesInicio()[$inicio]), 'class'=>"form-control",'placeholder'=>'0900')); ?>
                <?php echo $form->textField($model,'fechaCaducidad',array('value'=>CHtml::encode(Horario::model()->dameHorasCaducidad()[$fin]), 'class'=>"form-control",'placeholder'=>'0900')); ?>
            </div>
                    <div class="btn-group" ng-show="asignar">
                        <?php echo CHtml::submitButton('Asignar Aula',array('class'=>'btn btn-success btn-lg')); ?>
                    </div>

        <?php $this->endWidget(); ?>
    </div>
    <div id="profesores" class="hidden"><?php echo json_encode(Profesor::model()->dameProfesores()); ?> </div>

</div>
<script type="text/javascript">

function asignarAula($scope){
     var profesores = leeProfesores();
    $scope.profesores   = profesores;
    $scope.informacion=false;
    function leeProfesores(){
    var profesores = angular.element(document.getElementById('profesores')).html();
    return angular.fromJson(profesores);
    }
}


</script>
