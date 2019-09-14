<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Buscar Aula'
);
?>

	<h1>Busqueda de Aulas disponibles</h1>
	<h3>Fecha: <?php echo date("d  F  Y");?></h3>
	<h3>Hora: <?php echo date("H:i:s");?></h3>

<div class="form">
        <div ng-hide="<?php echo $existencia; ?>" class="alert alert-danger alert-dismissible" role="alert">
            <strong>Atención!!</strong> La bitacora del dia de hoy no ha sido cargada.
        </div>
        <div ng-hide="<?php echo $verificar; ?>" class="alert alert-danger " role="alert">
            <strong>Lo siento!!</strong> El numero de horas seleccionado supera el horario permitido de cucei :'(
        </div>
            <div ng-hide="<?php echo $mensajeError; ?>" class="alert alert-danger " role="alert">
            <strong>Lo siento!!</strong> Debes seleccionar la hora de inicio y el numero de horas.
        </div>

        <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-form',
	'enableAjaxValidation'=>false,
        )); ?>
                    <div class="btn-group" >
                        <h4><strong class="text-info">Hora de Inicio</strong></h4>
                        <?php
                             echo $form->dropDownList($model,'horaInicio', Horario::model()->dameHorasPosiblesInicio() ,array('empty'=>'Selecciona Hora de inicio','class'=>"form-control"));
                           // echo CHtml::dropDownList('horaIni',$horaInicio ,$horas, array('empty' => 'Selecciona Hora Inicio','class'=>"form-control"));
                        ?>
                        <?php echo $form->error($model,'horaInicio'); ?>
                    </div><br />
                    <div class="btn-group" >
                        <h4><strong class="text-info">Numero de Horas</strong></h4>
                        <?php
                            echo $form->dropDownList($model,'numHoras', Horario::model()->dameNumeroHoras() ,array('empty'=>'Selecciona cantidad de horas','class'=>"form-control"));
                           // echo CHtml::dropDownList($model,'numHoras' ,Horario::model()->dameNumeroHoras(), array('empty' => 'Selecciona NumHoras','class'=>"form-control"));
                        ?>
                    </div><br />
            <div class="btn-group" ng-show="<?php echo $existencia; ?>">
                <?php echo CHtml::submitButton('Buscar Aula',array('class'=>'btn btn-primary btn-lg ')); ?>
            </div>


        <?php $this->endWidget(); ?>
</div>
<hr>
<div  ng-controller="aulasDisponibles" ng-show="<?php echo json_encode($tablaResultados); ?>">

    <!-- Valores Angular -->
    <div id="aulas" class="hidden"><?php echo json_encode($tablaResultados); ?> </div>
   <table class="table table-striped">
        <thead>
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Edificio</th>
                <th style="text-align: center">Aula</th>
                <th style="text-align: center">Asignar</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="aula in aulas" >
                <td style="text-align: center">{{$index +1}}</td>

                <td style="text-align: center">{{aula.edificio}}</td>
                <td style="text-align: center"><a href="index.php?r=aula/view&id={{aula.id}}">{{aula.numero}}</a></td>

                <td style="text-align: center">
                    <div class="btn-group" role="group" >

                        <a href="<?php echo Yii::app()->homeUrl?>?r=registro/asignarAula&id={{aula.id}}&inicio=<?php echo $model->horaInicio; ?>&numero=<?php echo $model->numHoras; ?>" class="btn btn-primary"><span class="icon-plus icon-white" aria-hidden="true"></span></a>

                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<?php //echo $tablaResultados;
//echo count($tablaResultados);
//echo '<br>';
//var_dump($tablaResultados);
 //echo json_encode($tablaResultados);
?>
<script type="text/javascript">

function aulasDisponibles($scope){
     var aulas = leeAulas();
    $scope.aulas   = aulas;

    function leeAulas(){
    var aulas = angular.element(document.getElementById('aulas')).html();
    return angular.fromJson(aulas);
    }
}


</script>
