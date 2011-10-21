<?php

/**
 * This is the model class for table "boletin_informativo".
 *
 * The followings are the available columns in table 'boletin_informativo':
 * @property integer $id
 * @property string $mensaje
 * @property string $fechahora
 * @property integer $semestre1
 * @property integer $semestre2
 * @property integer $semestre3
 * @property integer $semestre4
 * @property integer $semestre5
 * @property integer $semestre6
 * @property integer $semestre7
 * @property integer $semestre8
 * @property integer $semestre9
 * @property integer $exatec
 * @property integer $idcarrera
 *
 * The followings are the available model relations:
 * @property Carrera $idcarrera0
 */
class BoletinInformativo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return BoletinInformativo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'boletin_informativo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mensaje, fechahora, idcarrera', 'required'),
			array('semestre1, semestre2, semestre3, semestre4, semestre5, semestre6, semestre7, semestre8, semestre9, exatec, idcarrera', 'numerical', 'integerOnly'=>true),
			array('mensaje', 'length', 'max'=>10000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, mensaje, fechahora, semestre1, semestre2, semestre3, semestre4, semestre5, semestre6, semestre7, semestre8, semestre9, exatec, idcarrera', 'safe', 'on'=>'search'),
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
			'idcarrera0' => array(self::BELONGS_TO, 'Carrera', 'idcarrera'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mensaje' => 'Mensaje',
			'fechahora' => 'Fechahora',
			'semestre1' => 'Semestre1',
			'semestre2' => 'Semestre2',
			'semestre3' => 'Semestre3',
			'semestre4' => 'Semestre4',
			'semestre5' => 'Semestre5',
			'semestre6' => 'Semestre6',
			'semestre7' => 'Semestre7',
			'semestre8' => 'Semestre8',
			'semestre9' => 'Semestre9',
			'exatec' => 'Exatec',
			'idcarrera' => 'Idcarrera',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('mensaje',$this->mensaje,true);
		$criteria->compare('fechahora',$this->fechahora,true);
		$criteria->compare('semestre1',$this->semestre1);
		$criteria->compare('semestre2',$this->semestre2);
		$criteria->compare('semestre3',$this->semestre3);
		$criteria->compare('semestre4',$this->semestre4);
		$criteria->compare('semestre5',$this->semestre5);
		$criteria->compare('semestre6',$this->semestre6);
		$criteria->compare('semestre7',$this->semestre7);
		$criteria->compare('semestre8',$this->semestre8);
		$criteria->compare('semestre9',$this->semestre9);
		$criteria->compare('exatec',$this->exatec);
		$criteria->compare('idcarrera',$this->idcarrera);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}