<?php

/**
 * This is the model class for table "registro".
 *
 * The followings are the available columns in table 'registro':
 * @property integer $id
 * @property string $fecha
 * @property integer $status
 * @property integer $tipo
 * @property string $fechaInicio
 * @property string $fechaCaducidad
 * @property string $nota
 * @property integer $horario
 * @property integer $aula
 * @property integer $profesor
 * @property integer $usuario
 */
class Registro extends CActiveRecord
{
    public $horaInicio;
    public $numHoras;
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
                       // array('fechaInicio', 'required'),
			array('status, tipo, horario, aula, profesor, usuario', 'numerical', 'integerOnly'=>true),
			array('nota', 'length', 'max'=>45),
			array('fecha, fechaInicio, fechaCaducidad', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, status, tipo, fechaInicio, fechaCaducidad, nota, horario, aula, profesor, usuario', 'safe', 'on'=>'search'),
		);
	}

        
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'status' => 'Status',
			'tipo' => 'Tipo',
			'fechaInicio' => 'Hora Inicio',
			'fechaCaducidad' => 'Hora Caducidad',
			'nota' => 'Nota',
			'horario' => 'Horario',
			'aula' => 'Aula',
			'profesor' => 'Profesor',
			'usuario' => 'Usuario',
                        'horaInicio' => 'Hora de Inicio',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		$criteria->compare('fechaCaducidad',$this->fechaCaducidad,true);
		$criteria->compare('nota',$this->nota,true);
		$criteria->compare('horario',$this->horario);
		$criteria->compare('aula',$this->aula);
		$criteria->compare('profesor',$this->profesor);
		$criteria->compare('usuario',$this->usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function dameStatus()
	{
            return array(   '1'=>'Activo',
                            '0'=>'Desactivado',
                           
                      );
	}
        public function dameMotivos()
	{
            return array(   '1'=>'Asignatura',
                            '2'=>'Temporal',
                           
                      );
	}
        public function verificarExistenciaBitacora()
        {
            
            $registros=Registro::model()->findByAttributes(array('fecha'=>date("Y-m-d")));
                        //return $registros;
            return ($registros) ? true : false ;
        }
        public function dameAulasDisponibles($horaInicio,$numeroHoras)
        {
            //$tablaResultados=array();
            //Quita los registros ya caducados.
            $this->quitaRegistrosCaducados();
           
            //dame los registros activos de hoy
            $registrosActivos=$this->dameRegistrosActivos();
            $bitacoraDelDia=$this->dameBitacoraDelDia($registrosActivos);
            $horasBusqueda=$this->dameHorasDeBusqueda($horaInicio, $numeroHoras);
            $aulasOcupadas=$this->dameAulasOcupadas($bitacoraDelDia, $horasBusqueda);
            $tablaResultados=$this->dameTablaAulasDisponibles($aulasOcupadas);
            return $tablaResultados;
            //return $registrosActivos;
        }
        
        public function quitaRegistrosCaducados()
        {
            //buscara todos los temporales 
            $registrosTemporales=$this->dameRegistrosTemporales();
            if($registrosTemporales)
            {
                foreach ($registrosTemporales as $registroTemporal) {
                    
                    if($registroTemporal->fechaCaducidad < date("H:i:s"))
                    {
                        $model=  Registro::model()->findByPk($registroTemporal->id);
                        $model->status=0;
                        $model->save();
                    }
                }
            }
        }
        public function dameRegistrosTemporales()
        {
            $criteria = new CDbCriteria;
            $criteria->condition = 'status=1 AND fecha =:fecha AND tipo=2';     
            $criteria->params = array(':fecha'=>date("Y-m-d"));
            $registrosTemporales=Registro::model()->findAll($criteria);
            return $registrosTemporales;
        }
        public function dameRegistrosActivos()
        {
           
            $criteria = new CDbCriteria;
            $criteria->condition = 'status=1 AND fecha =:fecha';     
            $criteria->params = array(':fecha'=>date("Y-m-d"));
            $registrosActivos=Registro::model()->findAll($criteria);
           
            return $registrosActivos;
        }
        public function dameBitacoraDelDia($registrosActivos)
        {
            $bitacoraDelDia=array();
            foreach ($registrosActivos as $registro) {
                if($registro->tipo==1){
                    $datosHorario=  Horario::model()->dameDatosHorario($registro->horario);
                    $bitacoraDelDia[]=array(
                                            'aula'=>  $datosHorario['aula'],
                                            'fechaIni'=>$datosHorario['horaIni'],
                                            'fechaFin'=>$datosHorario['horaFin'],     
                    );
                }
                else{
                    $bitacoraDelDia[]=array(
                                            'aula'=>  $registro->aula,
                                            'fechaIni'=>$registro->fechaInicio,
                                            'fechaFin'=>$registro->fechaCaducidad, 
                    );
                }
            }
            return $bitacoraDelDia;
        }
        
        public function dameTablaAulasDisponibles($aulasOcupadas)
        {
            //funcion que creara un arreglo con todas la aulas que no se encuentran ocupadas
            //busca las aulas ocupadas, en el catalogo y la que no exista la agregara
            $catalogoAulas=Aula::model()->dameTodosLasAulas();
            $aulasDisponibles=array();
            $agregar=true;
           
            foreach ($catalogoAulas as $catalogoAula)
            {
                foreach ($aulasOcupadas as $aulaOcupada)
                {
                    if($catalogoAula['id']==$aulaOcupada)
                    {
                        $agregar=false;
                    }
                }
                if($agregar)
                {
                    $aulasDisponibles[]=$catalogoAula;
                }
                $agregar=true;
            }
            return $aulasDisponibles;
        }


        public function dameAulasOcupadas($bitacoraDelDia,$horasBusqueda)
        {
            $aulasOcupadas=array();
            // $idsAulas=array();
            $idsAulasIni=$this->dameAulasOcupadasHoraInicio($bitacoraDelDia, $horasBusqueda[0]);
            //$idsAulasOcupadas=array_merge_recursive($idsAulasOcupadas,$idsAulas);
            $aulasOcupadas=array_merge_recursive($aulasOcupadas,$idsAulasIni);
            for($x=1; $x <count($horasBusqueda);$x++)
            {
               $idsAulas=$this->dameAulasOcupadasHoraFin($bitacoraDelDia, $horasBusqueda[$x]);
                $aulasOcupadas=array_merge_recursive($aulasOcupadas,$idsAulas);
            }
            $idsAulasOcupadas=array_unique($aulasOcupadas);
            return $idsAulasOcupadas;
            
        }
        
        public function dameAulasOcupadasHoraInicio($bitacoraDelDia,$horaBusqueda)
        {
            $idsAulas=array();
            
            foreach ($bitacoraDelDia as $key=> $registro) {
                
                if($registro['fechaIni']==$horaBusqueda)
                {
                    $idsAulas[$key]=$registro['aula'];
                }
            }
            return $idsAulas;
        }
        public function dameAulasOcupadasHoraFin($bitacoraDelDia,$horaBusqueda)
        {
            $idsAulas=array();
            foreach ($bitacoraDelDia as $key=> $registro) {
                if($registro['fechaFin']==$horaBusqueda)
                {
                    $idsAulas[$key]=$registro['aula'];
                 }
            }
            return $idsAulas;
        }
        

        public function verificaSeleccionHorario($horaInicio, $numeroHoras){
            
            $validacion=$horaInicio+$numeroHoras;
            
            return ($validacion<14)? true: false ;
        }
        
        public function dameHorasDeBusqueda($horaInicio,$numeroHoras)
        {
           $horasBusqueda=array();
           $valorHoraInicio=CHtml::encode(Horario::model()->dameHorasPosiblesInicio()[$horaInicio]);
           $i=0;
           $cont=$horaInicio;
           $x=0;
            for($i=0; $i<=$numeroHoras; $i++)
            {
                if($i==0){
                    $horasBusqueda[$x]=$valorHoraInicio;
                    $x++;
                    $horasBusqueda[$x]=CHtml::encode(Horario::model()->dameHorasFin()[$cont]);
                    $x++;
                }
                else{
                    $cont++;
                   $horasBusqueda[]=CHtml::encode(Horario::model()->dameHorasFin()[$cont]);    
                   $x++;
                }
            }
            return $horasBusqueda;
        }
        
        public function cargarBitacoraTablaRegistro($tablaRegistrosActual)
        {
            ini_set('max_execution_time', 300);
            foreach ($tablaRegistrosActual as $horario) {
                $model=new Registro;
                $model->fecha=$horario['fecha'];
                $model->horario=$horario['id'];
                $model->status=1;
                $model->tipo=1;
                $model->usuario=Yii::app()->user->id_usuario;
                $model->save();
            }
            return true;
            
        }
        
        






        // dame las aulas temporales
        /*
         foreach ($registrosActivos as $registroActivo){
                if($registroActivo->tipo==1)
                {
                    $aulasOcupadas[]=array(
                        'idRegistro'=>$registroActivo->id,
                        'idAula'=>  Horario::model()->dameIdAulaAsignada($registroActivo->horario),
                    );
                }
                else
                {
                    $aulasOcupadas[]=array(
                        'idRegistro'=>$registroActivo->id,
                        'idAula'=>  $registroActivo->aula,
                    );
                }
            }
            return $aulasOcupadas;
         * 
         * 
         * 
         * 
         * $registrosHoy=Registro::model()->findAll('fecha=?',array(date("Y-m-d")));
            //$registrosHoy=Registro::model()->findAll('status=1');
            foreach ($registrosHoy as $registro) {
                
                   if($registro->tipo==1)
                {
                    $tablaResultados[]=array(
                        'idRegistro'=>$registro->id,
                        'idAula'=>  Horario::model()->dameIdAulaAsignada($registro->horario),
                        'fechaIni'=>'',
                        'fechaFin'=>'',
                            
                    );
                }
                else
                {
                    $tablaResultados[]=array(
                        'idRegistro'=>$registro->id,
                        'idAula'=>  $registro->aula,
                        'fechaIni'=>$registro->fechaInicio,
                        'fechaFin'=>$registro->fechaCaducidad,
                            
                    );
                }
                
            }
         */
}
