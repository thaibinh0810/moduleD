<?php

/**
 * This is the model class for table "line".
 *
 * The followings are the available columns in table 'line':
 * @property integer $id
 * @property string $code
 * @property string $start_time_operation
 * @property string $end_time_operation
 * @property string $type
 * @property string $map
 */
class Line extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Line the static model class
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
		return 'line';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, start_time_operation, end_time_operation, map', 'required'),
			array('code, map', 'length', 'max'=>50),
			array('type', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, start_time_operation, end_time_operation, type, map', 'safe', 'on'=>'search'),
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
			'code' => 'Name',
			'start_time_operation' => 'Start Time Operation',
			'end_time_operation' => 'End Time Operation',
			'type' => 'Type',
			'map' => 'Map',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('start_time_operation',$this->start_time_operation,true);
		$criteria->compare('end_time_operation',$this->end_time_operation,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('map',$this->map,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}