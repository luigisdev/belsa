<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $correo
 * @property string $password
 * @property string $nombre
 * @property string $apellidos
 * @property integer $tipo
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('correo, password, nombre, apellidos', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, correo, password, nombre, apellidos, tipo', 'safe', 'on'=>'search'),
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
			'correo' => 'Correo',
			'password' => 'Password',
			'nombre' => 'Nombre',
			'apellidos' => 'Apellidos',
			'tipo' => 'Tipo',
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
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function  dameNombrePersona($id)
        {
            $usuario = Usuario::model()->findByPk($id);
            $nombrePersona=$usuario->nombre.' '.$usuario->apellidos;
            return $nombrePersona;
        }
        public function damePerfiles()
	{
            return array('1'=>'Administrador','2'=>'Usuario',
                      );
	}
        public function verificarExistenciaCorreo($email)
        {
            $usuario=  Usuario::model()->findByAttributes(array('correo'=>$email));
            
            
            return ($usuario) ? true : false ;
            
        }
        public function  dameNombreUsuario($id)
        {
            $nombreUsuario='';
            if(isset($id))
            {
                $usuario = Usuario::model()->findByPk($id);
                $nombreUsuario=$usuario->nombre.' '.$usuario->apellidos;
            }
            return $nombreUsuario;
        }
        
        public function dameUsuarios()
        {
           $usuarios=array();
           $objetoUsuarios = Usuario::model()->findAll();
          // $x=1;
           foreach ($objetoUsuarios as $objetoUsuario) {
                $usuarios[$objetoUsuario->id]=$this->dameNombreUsuario($objetoUsuario->id);
                //$x++;      
            }
            
            return $usuarios;
        }
}
