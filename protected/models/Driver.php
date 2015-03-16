<?php

/**
 * This is the model class for table "driver".
 *
 * The followings are the available columns in table 'driver':
 * @property integer $id
 * @property string $name
 * @property string $birth_date
 * @property string $email
 * @property string $phone
 * @property string $avatar
 * @property string $type
 * @property integer $vehicle_id
 */
class Driver extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Driver the static model class
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
		return 'driver';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, birth_date, email, phone, type, vehicle_id', 'required'),
			array('vehicle_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('email, avatar', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>40),
			array('type', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, birth_date, email, phone, avatar, type, vehicle_id', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'birth_date' => 'Birth Date',
			'email' => 'Email',
			'phone' => 'Phone',
			'avatar' => 'Avatar',
			'type' => 'Type',
			'vehicle_id' => 'Vehicle',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('vehicle_id',$this->vehicle_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}