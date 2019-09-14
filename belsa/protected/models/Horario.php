<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property integer $id
 * @property integer $nrc
 * @property string $dia
 * @property string $horaIni
 * @property string $horaFin
 * @property integer $aula
 * @property integer $curso
 * @property integer $profesor
 */
class Horario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nrc, aula, curso, profesor', 'numerical', 'integerOnly'=>true),
			array('dia', 'length', 'max'=>45),
			array('horaIni, horaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nrc, dia, horaIni, horaFin, aula, curso, profesor', 'safe', 'on'=>'search'),
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
			'nrc' => 'Nrc',
			'dia' => 'Dia',
			'horaIni' => 'Hora Ini',
			'horaFin' => 'Hora Fin',
			'aula' => 'Aula',
			'curso' => 'Curso',
			'profesor' => 'Profesor',
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
		$criteria->compare('nrc',$this->nrc);
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('horaIni',$this->horaIni,true);
		$criteria->compare('horaFin',$this->horaFin,true);
		$criteria->compare('aula',$this->aula);
		$criteria->compare('curso',$this->curso);
		$criteria->compare('profesor',$this->profesor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function dameDias()
	{
            return array(   '1'=>'Lunes',
                            '2'=>'Martes',
                            '3'=>'Miercoles',
                            '4'=>'Jueves',
                            '5'=>'Viernes',
                            '6'=>'Sabado',
                      );
	}
        public function horasInicio()
        {
            return array(   '07:00:00'     =>'07:00:00',
                            '08:00:00'     =>'08:00:00',
                            '09:00:00'     =>'09:00:00',
                            '10:00:00'     =>'10:00:00',
                            '11:00:00'     =>'11:00:00',
                            '12:00:00'     =>'12:00:00',
                            '13:00:00'     =>'13:00:00',
                            '14:00:00'     =>'14:00:00',
                            '15:00:00'     =>'15:00:00',
                            '16:00:00'     =>'16:00:00',
                            '17:00:00'    =>'17:00:00',
                            '18:00:00'    =>'18:00:00',
                            '19:00:00'    =>'19:00:00',
                            '20:00:00'    =>'20:00:00',
                            
                      );
        }
        public function horasFin()
        {
            return array(   '07:55:00'     =>'07:55:00',
                            '08:55:00'     =>'08:55:00',
                            '09:55:00'     =>'09:55:00',
                            '10:55:00'     =>'10:55:00',
                            '11:55:00'     =>'11:55:00',
                            '12:55:00'     =>'12:55:00',
                            '13:55:00'     =>'13:55:00',
                            '14:55:00'     =>'14:55:00',
                            '15:55:00'     =>'15:55:00',
                            '16:55:00'     =>'16:55:00',
                            '17:55:00'    =>'17:55:00',
                            '18:55:00'    =>'18:55:00',
                            '19:55:00'    =>'19:55:00',
                            '20:55:00'    =>'20:55:00',
                            
                      );
        }
        public function dameHorasPosiblesInicio()
        {
            return array(   '0'     =>'07:00:00',
                            '1'     =>'08:00:00',
                            '2'     =>'09:00:00',
                            '3'     =>'10:00:00',
                            '4'     =>'11:00:00',
                            '5'     =>'12:00:00',
                            '6'     =>'13:00:00',
                            '7'     =>'14:00:00',
                            '8'     =>'15:00:00',
                            '9'     =>'16:00:00',
                            '10'    =>'17:00:00',
                            '11'    =>'18:00:00',
                            '12'    =>'19:00:00',
                            '13'    =>'20:00:00',
                            
                      );
        }
        public function dameHorasFin()
        {
            return array(   '0'     =>'07:55:00',
                            '1'     =>'08:55:00',
                            '2'     =>'09:55:00',
                            '3'     =>'10:55:00',
                            '4'     =>'11:55:00',
                            '5'     =>'12:55:00',
                            '6'     =>'13:55:00',
                            '7'     =>'14:55:00',
                            '8'     =>'15:55:00',
                            '9'     =>'16:55:00',
                            '10'    =>'17:55:00',
                            '11'    =>'18:55:00',
                            '12'    =>'19:55:00',
                            '13'    =>'20:55:00',
                            
                      );
        }
        public function dameHorasCaducidad()
        {
            return array(   '1'     =>'07:55:00',
                            '2'     =>'08:55:00',
                            '3'     =>'09:55:00',
                            '4'     =>'10:55:00',
                            '5'     =>'11:55:00',
                            '6'     =>'12:55:00',
                            '7'     =>'13:55:00',
                            '8'     =>'14:55:00',
                            '9'     =>'15:55:00',
                            '10'    =>'16:55:00',
                            '11'    =>'17:55:00',
                            '12'    =>'18:55:00',
                            '13'    =>'19:55:00',
                            '14'    =>'20:55:00',
                            
                      );
        }
        public function dameNumeroHoras()
        {
            return array(   '0'     =>'1',
                            '1'     =>'2',
                            '2'     =>'3',
                            '3'     =>'4',
                            
                      );
        }
       
        public function dameIdAulaAsignada($idHorario)
        {
            
            $objetoHorario=  Horario::model()->findByPk($idHorario);
            
            return ($objetoHorario)? $objetoHorario->aula:'';
        }
        public function dameDatosHorario($idHorario)
        {
            $datosHorario=array();
            $objetoHorario=  Horario::model()->findByPk($idHorario);
            if($objetoHorario)
            {
                $datosHorario=array(
                    'aula'      =>$objetoHorario->aula,
                    'horaIni'   =>$objetoHorario->horaIni,
                    'horaFin'   =>$objetoHorario->horaFin,
                    
                );
            }
            
            return $datosHorario;    
        }

        public function dameTablaRegistrosHoy()
        {
            $tablaRegistrosActual=array();
            
            $horario=  Horario::model()->findAll('dia=?',array(date("N")));
            
            foreach ($horario as $registo) {
                $tablaRegistrosActual[]=array(
                    'id'=>$registo->id,
                    'fecha'=>date("Y-m-d"),
                );
            }
            return $tablaRegistrosActual;
        }
}
