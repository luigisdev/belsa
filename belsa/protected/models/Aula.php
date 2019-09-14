<?php

/**
 * This is the model class for table "aula".
 *
 * The followings are the available columns in table 'aula':
 * @property integer $id
 * @property string $numero
 * @property string $edificio
 */
class Aula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, edificio', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, numero, edificio', 'safe', 'on'=>'search'),
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
			'numero' => 'Numero',
			'edificio' => 'Edificio',
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
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('edificio',$this->edificio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function  dameAula($id)
        {
            $aula='';
            if(isset($id))
            {
                $objetoAula = Aula::model()->findByPk($id);
                $aula=$objetoAula->edificio.' '.$objetoAula->numero;
            }
            return $aula;
        }
        public function dameAulasVista()
        {
            $aulas=array();
           $objetoaulas = Aula::model()->findAll();
           $x=1;
           foreach ($objetoaulas as $objetoaula) {
                $aulas[$x]=$this->dameAula($objetoaula->id);
                $x++;      
            }
            
            return $aulas;
        }

        public function dameTodosLasAulas()
        {
           $aulas=array();
           $objetoaulas = Aula::model()->findAll();
           foreach ($objetoaulas as $objetoaula) {
                $aulas[]=array(
                                'id'=>$objetoaula->id,
                                'edificio'=>$objetoaula->edificio,
                                'numero'=>$objetoaula->numero,
                );
            }
            
            return $aulas;
        }
}
