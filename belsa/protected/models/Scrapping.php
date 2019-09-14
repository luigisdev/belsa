<?php

class Scrapping extends CFormModel
{
    public function dameHorarioFinal()
    {
        $path='http://localhost'.Yii::app()->request->baseUrl.'/assets/csv/unHorario.csv';
        $registros = array_map('str_getcsv', file($path));
        $matrizM=array();
        foreach ($registros as $registro) {

            for($j=0; $j<$registro[10]; $j++) {
                $arrayTemp=$this->armaArrayTemporalUnHorario($registro,$j);
                $matrizM[]=$arrayTemp;
            }
        }
        return $matrizM;
    }
    public function dame2HorariosFinal()
    {
        $path='http://localhost'.Yii::app()->request->baseUrl.'/assets/csv/dosHorarios.csv';
        $registros = array_map('str_getcsv', file($path));
        $matrizM=array();
        foreach ($registros as $registro) {
            $arrayHorarioUno = array($registro[3],$registro[4],$registro[5],$registro[6],$registro[7],$registro[8],$registro[9]);
            $arrayHorarioDos = array($registro[10],$registro[11],$registro[12],$registro[13],$registro[14],$registro[15],$registro[16]);
            $arrayHorarios = array($arrayHorarioUno,$arrayHorarioDos);

            for($j=0; $j<2; $j++) {
                for($k=0; $k<$arrayHorarios[$j][6]; $k++) {
                    $arrayTemp=$this->armaArrayTemporalDosHorarios($registro,$arrayHorarios[$j],$k);
                    $matrizM[]=$arrayTemp;
                }
            }
        }
        return $matrizM;
    }
    public function dame3HorariosFinal()
    {
        $path='http://localhost'.Yii::app()->request->baseUrl.'/assets/csv/tresHorarios.csv';
        $registros = array_map('str_getcsv', file($path));
        $matrizM=array();
        foreach ($registros as $registro) {

            for($j=0; $j<3; $j++) {
                $arrayTemp=$this->armaArrayTemporalTresHorarios($registro,$j);
                $matrizM[]=$arrayTemp;
            }
        }
        return $matrizM;
    }

    function armaArrayTemporalUnHorario($registro,$j) {
        $dias = array($registro[7],$registro[8],$registro[9]);
        return  array(
                'nrc'=>$registro[0],
                'dia'=>$this->convierteDia($dias[$j]),
                'horaIni'=>$registro[5],
                'horaFin'=>$registro[6],
                'aula'=>$this->dameIdAula($registro[3], $registro[4]),
                'curso'=>$this->dameIdCurso(trim($registro[1])),
                'profesor'=>$this->dameIdProfesor($registro[12], $registro[11]),
            );
    }

    function armaArrayTemporalDosHorarios($registro,$arrayHorarios,$k) {
        $dias       =   array($arrayHorarios[4],$arrayHorarios[5]);
        $numeroAula =   $arrayHorarios[1];
        $edificio   =   $arrayHorarios[0];
        $horaInicio =   $arrayHorarios[2];
        $horaFin    =   $arrayHorarios[3];

        return  array(
                'nrc'=>$registro[0],
                'dia'=>$this->convierteDia($dias[$k]),
                'horaIni'=>$horaInicio,
                'horaFin'=>$horaFin,
                'aula'=>$this->dameIdAula($edificio, $numeroAula),
                'curso'=>$this->dameIdCurso(trim($registro[1])),
                'profesor'=>$this->dameIdProfesor($registro[18], $registro[17]),
            );
    }

    function armaArrayTemporalTresHorarios($registro,$j) {

        $dias = array($registro[7],$registro[12],$registro[17]);
        $numeroAula=array($registro[4],$registro[9],$registro[14]);
        $edificio=array($registro[3],$registro[8],$registro[13]);
        $horaInicio=array($registro[5],$registro[10],$registro[15]);
        $horaFin=array($registro[6],$registro[11],$registro[16]);
        return  array(
                'nrc'=>$registro[0],
                'dia'=>$this->convierteDia($dias[$j]),
                'horaIni'=>$horaInicio[$j],
                'horaFin'=>$horaFin[$j],
                'aula'=>$this->dameIdAula($edificio[$j], $numeroAula[$j]),
                'curso'=>$this->dameIdCurso(trim($registro[1])),
                'profesor'=>$this->dameIdProfesor($registro[19], $registro[18]),


            );


    }

    public function convierteDia($dia)
    {
        $dias=array(
            'L'=>1,'M'=>2, 'I'=>3,'J'=>4,'V'=>5,'S'=>6,
        );
        return $dias[$dia];
    }

    public function dameIdCurso($clave)
    {
        //findAll('id=:t4 AND id=:t1 OR id=:t2 OR id=:t3', array(':t1'=>3,':t2'=>43,':t3'=>44,':t4'=>1));
        $curso=  Curso::model()->findByAttributes(array('clave'=>$clave));
        return ($curso)? $curso->id : '';
        //return $curso;
    }
    public function dameIdProfesor($nombre,$apellidos)
    {
        $profesor= Profesor::model()->findByAttributes(array('nombre'=>$nombre,'apellidos'=>$apellidos));
        return ($profesor)? $profesor->id:'';
    }
    public function dameIdAula($edificio,$numero)
    {
        $aula= Aula::model()->findByAttributes(array('edificio'=>$edificio,'numero'=>$numero));
        return ($aula)? $aula->id:'';
    }
}
