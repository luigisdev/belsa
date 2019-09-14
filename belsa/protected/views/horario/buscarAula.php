<h1>
    Buscar Aula disponible
</h1>
<div  ng-controller="buscarAula" >
    <div class="row">
        <div class="col-md-4">
            <div class="form-group" >
                <div dropdown  > 
                    <h4><strong class="text-info"> Horario</strong></h4>

                    <select class="form-control"  name="horario" id="horario"  style="height: 46px">
                        <option value="">--- Seleccione Horario ---</option>
                        <option value="{{horario}}" data-tokens="frosting" ng-repeat="horario in horarios">{{diametroExterior.nps}}" - {{diametroExterior.de*25.4 | number:1}} mm</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div id="horario" class="hidden"><?php echo json_encode($horario); ?> </div>
</div>
<script type="text/javascript">

function buscarAula($scope){
     var perfiles = leePerfiles();
    $scope.perfiles   = perfiles;

    function leePerfiles(){
    var horario = angular.element(document.getElementById('horario')).html();
    return angular.fromJson(horario);
    }
}


</script>
